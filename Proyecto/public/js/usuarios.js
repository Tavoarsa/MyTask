'use strict';

$(document).ready(function() {
	cargarUsuarios();
	getId();
	

 	/*$('#insertar').click(function() {

 		
 		var candidato_id = $("input[type='radio'][name='candidatos']:checked").attr('id');
	    $.ajax({
	      url: '/votaciones',
	      type: 'POST',
	      data: { candidato_id :  candidato_id }

	    })
	    .done(function(data) {
	    	localStorage.votacion="voto";
	      	console.log(data);
	      	gracias();
	     
	    })
	    .fail(function(data,data1) {
	      alert(data);
	      alert(data1);
	    });
  	});

  	$('#resultados').click(function() {
  		
  	});*/
});

function cargarUsuarios()
{


		$.ajax({
		      url: '/usuario',
		      type : 'GET'
		    })
		    .done(function(data) {
		      console.log(data); 
		      
		      $('#usuario').append('<div class="usuario" type="text"  name="Usuario" id="">'+data+'</div>' +'<br>');		      	

		    }).fail(function() {
				alert('error');
			});
	
	
}

function getId()
{


		$.ajax({
		      url: '/id',
		      type : 'GET'
		    })
		    .done(function(data) {
		      console.log(data); 
		      
		      $('#id_user').append('<div class="usuario" type="text"  name="Usuario" id="'+data+'"></div>' +'<br>');		      	

		    }).fail(function() {
				alert('error');
			});
	
	
}

