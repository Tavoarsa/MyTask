'use strict';


$(document).ready(function() {
	

 	$('#salvar').click(function() {

 		
		var id_users = $("input[type='text'][name='usuario_id']:checked").attr('id');
		
 		

 		$.ajax({
	      url: '/create',
	      type: 'POST',
	      data: { 	id_users : id_users,
	      			titulo : titulo,
	      			prioridad : prioridad,
	      			descripcion : descripcion }   

	    })
	    .done(function(data) {    	
	      	console.log(data);      	
	     
	    })
	    .fail(function(data,data1) {
	      console(data);
	      console(data1);
	    });
  	});

});