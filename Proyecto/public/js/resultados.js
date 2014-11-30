'use strict';
// Load the Visualization API and the piechart package.
google.load('visualization', '1.0', {'packages':['corechart']});

$(document).ready(function() {
    grafico();
   
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    //drawChart();

});


function grafico () {
	$.ajax({
      url: '/select',
      type : 'GET'
    })
    .done(function(data) {
      console.log(data);


     	var objectToDraw = [];
        var column       = [];
        for(var i=0 ;i<data.length;i++){
            data[i].candies;
            
            column.push(data[i].nombre);
            column.push(parseFloat(data[i].total));
            objectToDraw.push(column);
            column = [];
        }
        drawChart(objectToDraw);
		

      
    }).fail(function(data, data1) {
		console.log(data);
		console.log(data1);
	});	
}

function drawChart(objectToDraw) {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    /*data.addRows([
      ['Pepito', 3],
      ['Juancito', 6]
    ]);*/
    data.addRows(objectToDraw);

    // Set chart options
    var options = {'title':'El resultado de la votaciones es!!!!',
                   'width':400,
                   'height':300};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('grid'));
    chart.draw(data, options);
}