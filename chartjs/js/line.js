$(document).ready(function(){
	$.ajax({
		url: "http://localhost/miosito/chartjs/data1.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var id_sensore = [];
			var somma = [];


			for(var i in data) {
                                id_sensore.push("Sensore " + data[i].id_sensore);
				somma.push(data[i].somma);
			}

			var chartdata = {
				labels: id_Sensore,
				datasets : [
					{
						label: 'Somma dei valori per sensore',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: somma
					}
				]
			};

			var ctx = $("#canvas2");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
                                options: {
				        tooltips: {
				          cornerRadius: 0,
				          caretSize: 0,
				          xPadding: 16,
				          yPadding: 10,
				          backgroundColor: 'rgba(0, 150, 100, 0.9)',
				          titleFontStyle: 'normal',
				          titleMarginBottom: 15
				        }
   				 }
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
