$(function(e) {
	
	// ______________ First-Tab
	$(".first_tab").champ();
	
	// ______________ Accordion
	$(".accordion_example").champ({
		plugin_type: "accordion",
		side: "left",
		active_tab: "3",
		controllers: "true"
	});
	
	// ______________ Second-Tab
	$(".second_tab").champ({
		plugin_type: "tab",
		side: "right",
		active_tab: "1",
		controllers: "false"
	});

});