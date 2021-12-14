$(function(e){
	var $gallery = $('.gallery a').simpleLightbox();

	$gallery.on('show.simplelightbox', function(e){
		console.log('Requested for showing');
	})
	.on('shown.simplelightbox', function(e){
		console.log('Shown');
	})
	.on('close.simplelightbox', function(e){
		console.log('Requested for closing');
	})
	.on('closed.simplelightbox', function(e){
		console.log('Closed');
	})
	.on('change.simplelightbox', function(e){
		console.log('Requested for change');
	})
	.on('next.simplelightbox', function(e){
		console.log('Requested for next');
	})
	.on('prev.simplelightbox', function(e){
		console.log('Requested for prev');
	})
	.on('nextImageLoaded.simplelightbox', function(e){
		console.log('Next image loaded');
	})
	.on('prevImageLoaded.simplelightbox', function(e){
		console.log('Prev image loaded');
	})
	.on('changed.simplelightbox', function(e){
		console.log('Image changed');
	})
	.on('nextDone.simplelightbox', function(e){
		console.log('Image changed to next');
	})
	.on('prevDone.simplelightbox', function(e){
		console.log('Image changed to prev');
	})
	.on('error.simplelightbox', function(e){
		console.log('No image found, go to the next/prev');
		console.log(e);
	});
});