<h1>Dasboard</h1>



<div class="container"  id="usuario">
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
    
</table>

<script type="text/javascript">
    $(document).ready(function() {
        cargar_tabla();
        
    });

    function cargar_tabla() {
        $.getJSON('tabla', function(json, textStatus) {

          console.log(json);
        

    }
</script>