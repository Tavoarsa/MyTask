<?php

class Task extends Eloquent
{
    protected $table      = 'task';
    protected $fillable   = array('id_users','titulo','prioridad','descripcion','estado');
    protected $guarded    = array('id');
    public    $timestamps = false;


public static function mostrarUsuarios()
	{

		$id_users = Auth::id();
		$sql = 'select  u.id,u.email,t.titulo, t.prioridad, t.descripcion,t.estado
				from 
				task t 
				inner join users u on (t.id_users =u.id)
				where id_users=id_users';
				return DB::select($sql);
	}





}
