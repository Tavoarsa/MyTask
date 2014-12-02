'use strict';

$(document).ready(function() {
	cargarUsuarios();
	getId();
	
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
		      
		      $('#id_user').append('<input class="usuarios" type="text"  name="usuario_id" id="'+data+'">'+'<br>');

		    }).fail(function() {
				alert('error');
			});
	
	
}

