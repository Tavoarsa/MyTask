<h1>Eliminar</h1>

{{ Form::open(array('url' => "task/$task->id/delete")) }}

{{ Form::text('titulo', $task->titulo) }}

 {{Form::submit('Eliminar', array())}}
 {{link_to("task", 'Cancelar', $attributes = array(), $secure = null);}}
 {{ Form::close() }}