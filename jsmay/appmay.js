$(document).ready(function(){
	$.ajax({
		url: "http://localhost/editorial/jsmay/datamay.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var branch = [];
			var totalmay = [];
		
			for(var i in data) {
				branch.push("Branch " + data[i].branch);
				totalmay.push(data[i].totalmay);
				
			}



			var chartdata = {
				labels: branch,
				datasets : [
					{
						label: 'Branch Profit For May',
						backgroundColor: "rgba(59, 89, 152, 0.75)",
						borderColor: "rgba(59, 89, 152, 1)",
						hoverBackgroundColor: "rgba(59, 89, 152, 1)",
						hoverBorderColor: "rgba(59, 89, 152, 1)",
						data: totalmay
					}
				]
			};

			var ctx = $("#mycanvasmay");

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