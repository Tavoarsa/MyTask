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

  <tr>
      <td class="tavo" >
            <div id="nueva"></div>
      </td>

      <td class="tavo" >
            <div id= "progreso" >
            </div>

      </td>

      <td class="tavo" >
            <div id= "terminada">
            </div>
      </td>

      <td class="tavo">
            <div  id= "verificada">
            </div>
      </td>

  </tr>

    
</table>

<script type="text/javascript">
    $(document).ready(function() {
        cargar_tabla();
        
    });


    function cargar_tabla() {

       $.ajax({
          url: '/index',
          type : 'GET'
        })
        .done(function(data) {
          console.log(data);
          alert('data');

          for(var i=0; i<data.length; i++){

            if( data[i].estado==1)
            {
              $('#nueva').append('<li id = "' + data[i].id +'" > <a href="task/' + data[i].id + '/edit">Editar</a> '+ data[i].descripcion+ '</li>');

            }
             if( data[i].estado==2)
            {
              $('#progreso').append('<li id = "' + data[i].id +'" > '+ data[i].descripcion+ '</li>');

            }
              if( data[i].estado==3)
            {
              $('#terminada').append('<li id = "' + data[i].id +'" > '+ data[i].descripcion+ '</li>');

            }

             if( data[i].estado==4)
            {
              $('#verificada').append('<li id = "' + data[i].id +'" > '+ data[i].descripcion+ '</li>');

            }

            


          }
          
          

        }).fail(function() {
        alert('error');
      });


        

    }
</script>