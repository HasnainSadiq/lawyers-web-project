$(function(){
   'use strict'
	
	// Dropify
	$('.dropify').dropify({
		messages: {
			'default': 'Drag and drop a file here or click',
			'replace': 'Drag and drop or click to replace',
			'remove': 'Remove',
			'error': 'Ooops, something wrong appended.'
		},
		error: {
			'fileSize': 'The file size is too big (2M max).'
		}
	});
	
	// Input Mask
	$(":input").inputmask();
	
   // Toggles
   $('.toggle').toggles({
	 on: true,
	 height: 26
   });

   // Input Masks
   $('#dateMask').mask('99/99/9999');
   $('#phoneMask').mask('(999) 999-9999');
   $('#ssnMask').mask('999-99-9999');

   // Time Picker
   $('#tpBasic').timepicker();
   $('#tp2').timepicker({'scrollDefault': 'now'});
   $('#tp3').timepicker();

   $(document).on('click', '#setTimeButton', function(e){
	 $('#tp3').timepicker('setTime', new Date());
   });

   // Color picker
   $('#colorpicker').spectrum({
	 color: '#2b88ff'
   });

   $('#showAlpha').spectrum({
	 color: 'rgba(0, 97, 218, 0.5)',
	 showAlpha: true
   });

   $('#showPaletteOnly').spectrum({
	   showPaletteOnly: true,
	   showPalette:true,
	   color: '#DC3545',
	   palette: [
		   ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
		   ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
	   ]
   });

	// Datepicker
   $('.fc-datepicker').datepicker({
	 showOtherMonths: true,
	 selectOtherMonths: true
   });
   $('#datepickerNoOfMonths').datepicker({
	 showOtherMonths: true,
	 selectOtherMonths: true,
	 numberOfMonths: 2
   });
   
  
   // Select2
   $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
   
   
   // Filebrowser
	
	$(document).on('change', ':file', function() {
	var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	input.trigger('fileselect', [numFiles, label]);
	});

	// We can watch for our custom `fileselect` event like this
	$(document).ready( function() {
	  $(':file').on('fileselect', function(event, numFiles, label) {

		  var input = $(this).parents('.input-group').find(':text'),
			  log = numFiles > 1 ? numFiles + ' files selected' : label;

		  if( input.length ) {
			  input.val(log);
		  } else {
			  if( log ) alert(log);
		  }

	  });
	});
	
});
