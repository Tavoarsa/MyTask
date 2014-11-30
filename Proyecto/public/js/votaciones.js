'use strict';

$(document).ready(function() {
	cargarCandidatos();
	

 	$('#insertar').click(function() {

 		
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
  		
  	});
});

function cargarCandidatos()
{
  
	if(localStorage.votacion === undefined) {

		$.ajax({
		      url: '/candidatos',
		      type : 'GET'
		    })
		    .done(function(data) {
		      console.log(data);

		      for(var i=0; i<data.length; i++){
		      	$('#grid').append('<input class="candidatos" type="radio"  name="candidatos" id="'+data[i].id+'">'+data[i].nombre+'<br>');
		      }
		    }).fail(function() {
				alert('error');
			});
	}
	else{
		gracias();
	}
}

function gracias(){
	$('#grid').empty();
	$('#insertar').attr('disabled', 'disabled');
  	$('#grid').append('<label> Gracias por votar </label>');
  	window.location.replace("http://localhost:8000/resultados");
}