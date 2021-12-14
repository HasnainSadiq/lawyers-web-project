(function ( $ ) {
	/* line chart */
	var myCanvas = document.getElementById("lineChart");
	myCanvas.height="150";

	var myCanvasContext = myCanvas.getContext("2d");
	var gradientStroke1 = myCanvasContext.createLinearGradient(0, 0, 0, 380);
	gradientStroke1.addColorStop(0, 'rgba(107, 102, 248,0.3)');
	
	var gradientStroke2 = myCanvasContext.createLinearGradient(0, 0, 0, 280);
	gradientStroke2.addColorStop(0, 'rgba(251, 92, 59,0.3)');
	
    var myChart = new Chart( myCanvas, {
		type: 'line',
		data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            type: 'line',
            datasets: [ {
				label: 'Total Sales',
				data: [0, 70, 75, 120, 94, 141, 60],
				backgroundColor: gradientStroke1,
				borderColor: '#6b66f8',
				pointBackgroundColor:'#6b66f8',
				pointHoverBackgroundColor:gradientStroke1,
				pointBorderColor :'#6b66f8',
				pointHoverBorderColor :gradientStroke1,
				pointBorderWidth :3,
				pointRadius :3,
				pointHoverRadius :2,
				borderWidth: 2
            }, {
				label: "Total Revenue",
				data: [0, 50, 40, 80, 40, 79, 50],
				backgroundColor: gradientStroke2,
				borderColor: '#fb5c3b',
				pointBackgroundColor:'#fb5c3b',
				pointHoverBackgroundColor:gradientStroke2,
				pointBorderColor :'#fb5c3b',
				pointHoverBorderColor :gradientStroke2,
				pointBorderWidth :3,
				pointRadius :3,
				pointHoverRadius :2,
				borderWidth: 2
			}
			]
        },
		options: {
			responsive: true,
			maintainAspectRatio: true,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 3,
				intersect: false,
			},
			legend: {
				display: true,
				labels: {
					usePointStyle: false,
				},
			},
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#97a3b9",
					 },
					display: true,
					gridLines: {
						display: true,
						color:'rgba(119, 119, 142, 0.08)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'Month',
						fontColor: 'transparent'
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#97a3b9",
					 },
					display: true,
					gridLines: {
						display: true,
						color:'rgba(119, 119, 142, 0.08)',
						drawBorder: false
					},
					scaleLabel: {
						display: false,
						labelString: 'sales',
						fontColor: 'transparent'
					}
				}]
			},
			title: {
				display: false,
				text: 'Normal Legend'
			}
		}
	});
	/* line chart end */
	
	$(".sparkline_bar-2").sparkline([6,2,8,4,3,8,1,3,6,5,7], {
		type: 'bar',
		height: 90,
		colorMap: {
			'9': '#a1a1a1'
		},
		barColor: '#6b66f8',
		barSpacing: 7,
		barWidth: 6,
	});
	/* sparkline_bar end */
	
})( jQuery );	
