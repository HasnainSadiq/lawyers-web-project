$( function(e) {
	// default setup
	$( '.timer-countdown' ).countdown( {
		from: 180, // 3 minutes (3*60)
		to: 0, // stop at zero
		movingUnit: 1000, // 1000 for 1 second increment/decrements
		timerEnd: undefined,
		outputPattern: '$day Day $hour : $minute : $second',
		autostart: true
	} );
	// count up
	$( '.timer-countup' ).countdown( {
		from: 0,
		to: 180	
	} );
	// count in-between
	$( '.timer-countinbetween' ).countdown( {
		from: 60,
		to: 20 
	} );
	// counter callback
	$( '.oneminute' ).countdown( {
		from: 4563210,
		to: 0,
		timerEnd: function(e) {
			this.animate( { 'opacity':.5 }, 500 ).css( { 'text-decoration':'line-through' } );
		} 
	} );
	$( '.2minute' ).countdown( {
		from: 236584,
		to: 0,
		timerEnd: function(e) {
			this.animate( { 'opacity':.5 }, 500 ).css( { 'text-decoration':'line-through' } );
		} 
	} );
	$( '.hour' ).countdown( {
		from: 342600,
		to: 0,
		timerEnd: function(e) {
			this.animate( { 'opacity':.5 }, 500 ).css( { 'text-decoration':'line-through' } );
		} 
	} );
	$( '.day' ).countdown( {
		from: 7856955,
		to: 0,
		timerEnd: function(e) {
			this.animate( { 'opacity':.5 }, 500 ).css( { 'text-decoration':'line-through' } );
		} 
	} );
	// changed output patterns
	$( '.timer-outputpattern' ).countdown( {
		outputPattern: '$day Days $hour Hours $minute Miniuts $second Seconds',
		from: 60 * 60 * 24 * 3
	} );
} );