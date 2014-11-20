<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		  Schema::create('usuarios', function($tabla){
 
            $tabla->increments('id');           
            $tabla->string('username', 60);
            $tabla->string('email',100);
            $tabla->string('password', 100);
            $tabla->string('confirmed_password', 100);
            
 
        });
 
        DB::table('usuarios')->insert(
            array(
                'username' => 'Gustavo',
                'email' =>'tavo.cr23@gmail.com',
                'password' => Hash::make('123456'),
                'confirmed_password' => Hash::make('123456')
            )
        );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('usuarios');
	}

}
