$(document).ready(function(){
	$.ajax({
		url: "http://localhost/miosito/chartjs/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var id_sensore = [];
			var valore = [];


			for(var i in data) {
				id_sensore.push("Sensore " + data[i].id_sensore);
				valore.push(data[i].valore);
			}

			var chartdata = {
				labels: id_sensore,
				datasets : [
					{
						label: 'Media dei valori per sensore',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: valore
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});