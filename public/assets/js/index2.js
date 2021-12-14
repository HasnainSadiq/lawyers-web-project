$(function(e){
	
	/* Chartjs (#sales) */
	var myCanvas = document.getElementById("sales");
	myCanvas.height="335";

	var myCanvasContext = myCanvas.getContext("2d");
	var gradientStroke1 = myCanvasContext.createLinearGradient(0, 0, 0, 380);
	gradientStroke1.addColorStop(0, 'rgb(107, 102, 248)');

	var gradientStroke2 = myCanvasContext.createLinearGradient(0, 0, 0, 300);
	gradientStroke2.addColorStop(0, 'rgb(251, 92, 59)');
	
	var gradientStroke3 = myCanvasContext.createLinearGradient(0, 0, 0, 300);
	gradientStroke3.addColorStop(0, 'rgb(11, 148, 247)');
	var myChart = new Chart(myCanvas, {
		type: 'bar',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
			datasets: [{
				label: 'Total Sales',
				data: [15, 18, 12, 14, 10, 15, 7, 14],
				backgroundColor: gradientStroke1,
				hoverBackgroundColor: gradientStroke1,
				hoverBorderWidth: 2,
				hoverBorderColor: 'gradientStroke1'
			}, {
				label: 'Total Profit',
				data: [10, 14, 10, 15, 9, 14, 15, 20],
				backgroundColor: gradientStroke2,
				hoverBackgroundColor: gradientStroke2,
				hoverBorderWidth: 2,
				hoverBorderColor: 'gradientStroke2'
			},{

			    label: 'Total Orders',
				data: [12, 15, 10, 8, 15, 11, 17, 10],
				backgroundColor: gradientStroke3,
				hoverBackgroundColor: gradientStroke3,
				hoverBorderWidth: 2,
				hoverBorderColor: 'gradientStroke3'
			}
		  ]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: 'rgba(225,225,225,0.9)',
				bodyFontColor: 'rgba(225,225,225,0.9)',
				backgroundColor: 'rgba(0,0,0,0.7)',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: true,
				labels: {
					display: true,
					usePointStyle: true,
					fontColor: '#97a3b9'
				},
			},
			scales: {
				xAxes: [{
					 barPercentage: 0.5,
					ticks: {
						fontColor: "#97a3b9",

					 },
					display: true,
					gridLines: {
						display: true,
						color: 'rgba(119, 119, 142, 0.08)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Month',
						fontColor: '#97a3b9'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#97a3b9",
					 },
					display: true,
					gridLines: {
						display: true,
						color: 'rgba(119, 119, 142, 0.08)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'sales',
						fontColor: '#97a3b9'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	
	//morris chart
	new Morris.Donut({
		element: 'morrisBar8',
		data: [
				{value: 95, label: 'Chrome'},
				{value: 30, label: 'Internet Explorer'},
				{value: 45, label: 'Firefox'},
				{value: 20, label: 'Android'},
			],
			colors: [
				'#6b66f8', '#fb5c3b ', '#01d277', '#0b94f7'
			],
			formatter: function (x) { return x + "%"}
		}).on('click', function(i, row){
			console.log(i, row);
	});
	
});

