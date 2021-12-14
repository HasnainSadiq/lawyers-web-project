$(function(e){
  'use strict'

	//world map
	if ($('#world-map-gdp').length ){
		$('#world-map-gdp').vectorMap({
			map: 'world_en',
			backgroundColor: null,
			color: '#ffffff',
			hoverOpacity: 0.7,
			selectedColor: '#ec296b',
			enableZoom: true,
			showTooltip: true,
			values: sample_data,
			scaleColors: ['#6b66f8', '#4801ff'],
			normalizeFunction: 'polynomial'
		});
	}

	//us map
	if ($('#usa_map').length ){
		$('#usa_map').vectorMap({
			map: 'usa_en',
			backgroundColor: null,
			color: '#ffffff',
			hoverOpacity: 0.7,
			selectedColor: '#ec296b',
			enableZoom: true,
			showTooltip: true,
			values: sample_data,
			scaleColors: ['#fb5c3b', '#4801ff'],
			normalizeFunction: 'polynomial'
		});
	}
	
	if ($('#german').length ){
		$('#german').vectorMap({
			map : 'germany_en',
			backgroundColor: null,
			color: '#ffffff',
			hoverOpacity: 0.7,
			selectedColor: '#ec296b',
			enableZoom: true,
			showTooltip: true,
			values: sample_data,
			scaleColors: ['#01d277', '#4801ff'],
			normalizeFunction: 'polynomial'
		});
	}
	
	if ($('#russia').length ){
		$('#russia').vectorMap({
			map : 'russia_en',
			backgroundColor: null,
			color: '#ffffff',
			hoverOpacity: 0.7,
			selectedColor: '#0b94f7',
			enableZoom: true,
			showTooltip: true,
			values: sample_data,
		});
	}

});