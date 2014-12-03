<h3>Edit Task</h3>

{{ Form::open(array('url' => "task/$task->id/update")) }}

	{{ Form::label('titulo', 'Titulo') }}
	{{ Form::text('titulo', $task->titulo) }}
<br>
	{{ Form::label('prioridad', 'Prioridad') }}

	{{ Form::select('prioridad', array('Prioridad' => array('baja' => 'Baja','normal' => 'Normal','alta' => 'Alta')));}}
<br>
	{{ Form::label('descripcion', 'Descripcion') }}
<br>
	{{ Form::textarea('descripcion', $task->descripcion) }}
<br>

<br> 
{{ Form::label('prioridad', 'Prioridad') }}

	{{ Form::select('estado', array('Estado' => array('1' => 'Nueva','2' => 'Progreso','3' => 'Terminada','4' => 'verificada')));}}
<br>

	{{Form::submit('Update', array())}}

{{ Form::close() }}