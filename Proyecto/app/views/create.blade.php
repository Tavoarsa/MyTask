<h1>Create Task</h1>

<div class="container" id= "id_user">

</div>

{{ Form::label('titulo', 'Titulo') }}
{{ Form::text('titulo', '') }}
<br>
{{ Form::label('priorida', 'Priorida') }}
{{ Form::select('priorida', array('Priorida' => array('baja' => 'Baja','normal' => 'Normal','alta' => 'Alta')));}}
<br>
{{ Form::label('descripcion', 'Descripcion') }}
<br>
{{ Form::textarea('descripcion', '') }}
<br>
{{Form::button('Salvar', array('id' => 'salvar'))}}