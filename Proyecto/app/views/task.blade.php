<h1>Dasboard</h1>



<div="usuario">
<h2>Usuario: </h2>




</div>
<div id="nuevaTarea"> 

  {{ link_to_route('create', 'Nueva Tarea', null, array('class' => 'btn btn-default')) }}



</div>


<table id="tabla">
   <caption>Tareas</caption>

  <tr>
    <td>Nueva</td>
    <td>En Progreso</td>		
    <td>Terminada</td>
    <td>Verificada</td>
  </tr>
  <tr>
    <td id= "campo">Hola</td>
    <td></td>		
    <td></td>
    <td></td>
  </tr>  
</table>