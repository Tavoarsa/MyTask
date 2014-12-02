<h1>Create Task</h1>

<div class="container" id= "id_user">

</div>




{{ Form::open(array('url' => 'create')) }}

	{{ Form::label('titulo', 'Titulo') }}
	{{ Form::text('titulo', '') }}
<br>
	{{ Form::label('prioridad', 'Prioridad') }}

	{{ Form::select('prioridad', array('Prioridad' => array('baja' => 'Baja','normal' => 'Normal','alta' => 'Alta')));}}
<br>
	{{ Form::label('descripcion', 'Descripcion') }}
<br>
	{{ Form::textarea('descripcion', '') }}
<br>

<br> 

	{{Form::submit('Salvar', array())}}

{{ Form::close() }}