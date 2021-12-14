$(function (e) {
	$(".vertical-scroll").bootstrapNews({
		newsPerPage: 4,
		autoplay: true,
		pauseOnHover: true,
		navigation: false,
		direction: 'down',
		newsTickerInterval: 2500,
		onToDo: function (e) {
			//console.log(this);
		}
	});
	$(".vertical-scroll1").bootstrapNews({
		newsPerPage: 2,
		autoplay: true,
		pauseOnHover: true,
		navigation: false,
		direction: 'down',
		newsTickerInterval: 2500,
		onToDo: function (e) {
			//console.log(this);
		}
	});
});