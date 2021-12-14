$(function(e){
  'use strict'
 
	/* chartjs (#sales) */
	var myCanvas = document.getElementById("sales");
	myCanvas.height = "350";
	
	var myCanvasContext = myCanvas.getContext("2d");
	var gradientStroke1 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
	gradientStroke1.addColorStop(0, 'rgba(107, 102, 248, 0.8)');
	gradientStroke1.addColorStop(1, 'rgba(107, 102, 248, 0.2) ');
	
	var gradientStroke2 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
	gradientStroke2.addColorStop(0, 'rgba(251, 92, 59, 0.8)');
	gradientStroke2.addColorStop(1, 'rgba(251, 92, 59, 0.2) ');
	
    var myChart = new Chart( myCanvas, {
		type: 'line',
		data: {
            labels: ["Jan","Feb","Mar", "Apr", "May", "June","July", "Aug", "Sep", "Oct", "Nov", "Dec"],
            type: 'line',
            datasets: [ {
				label: 'Daily Sales',
				data: [0, 70, 75, 120, 94, 141, 60, 38, 86, 24, 65, 31, 137, 39, 51, 35, 41, 35],
				backgroundColor: gradientStroke1,
				borderColor: '#6b66f8 ',
				pointBackgroundColor:'#fff',
				pointHoverBackgroundColor:gradientStroke1,
				pointBorderColor :'#6b66f8 ',
				pointHoverBorderColor :gradientStroke1,
				pointBorderWidth :0,
				pointRadius :0,
				pointHoverRadius :0,
				lineTension: 0.2,
				 borderWidth: 2,
                    fill: 'origin'
            }, {
				label: 'Weekly Sales',
				data: [47, 45, 154, 38, 156, 24, 65, 31, 157, 39, 162, 51, 35, 141, 35, 27, 93, 53],
				backgroundColor: gradientStroke2,
				borderColor: '#fb5c3b',
				pointBackgroundColor:'#fff',
				pointHoverBackgroundColor:gradientStroke2,
				pointBorderColor :'#fb5c3b',
				pointHoverBorderColor :gradientStroke2,
				pointBorderWidth :0,
				pointRadius :0,
				pointHoverRadius :0,
				lineTension: 0.2,
				 borderWidth: 2,
                    fill: 'origin'
            }]
        },
		options: {
			responsive: true,
			maintainAspectRatio: false,
			tooltips: {
				mode: 'index',
				titleFontSize: 12,
				titleFontColor: '#000',
				bodyFontColor: '#000',
				backgroundColor: '#fff',
				cornerRadius: 3,
				intersect: false,
			},
			 stepsize: 200,
                min: 0,
                max: 400,
			legend: {
				display: true,
				labels: {
					usePointStyle: false,
				},
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						display: true,
						drawBorder: false,
						color:'rgba(119, 119, 142, 0.08)'
					},
					ticks: {
						fontColor: '#97a3b9',
						autoSkip: true,
						maxTicksLimit: 9,
						maxRotation: 0,
						labelOffset: 10
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
						drawBorder: false,
						color:'rgba(119, 119, 142, 0.08)'
					},
					scaleLabel: {
						display: false,
						labelString: 'sales',
						fontColor: 'transparent'
					}
				}]
			},
			title: {
				display:false,
				text: 'Normal Legend'
			}
		}
	});
	/* chartjs (#sales) closed */

  });
