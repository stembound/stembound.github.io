jQuery( document ).ready( function($) {

	if($('input#post-format-gallery').attr('checked')) {
 	   $("#fw-backend-option-fw-option-lsi_gallery_format").show();
	} else {
  	  $("#fw-backend-option-fw-option-lsi_gallery_format").hide();
	}

    $( "input#post-format-gallery" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_gallery_format" ).fadeIn('slow');
        }
    } );
    
        $( "input#post-format-0" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_gallery_format" ).hide();
        }
    } );
    
        $( "input#post-format-link" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_gallery_format" ).hide();
        }
    } );
    
        $( "input#post-format-quote" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_gallery_format" ).hide();
        }
    } );

});


jQuery( document ).ready( function($) {

	if($('input#post-format-link').attr('checked')) {
 	   $("#fw-backend-option-fw-option-lsi_link_format").show();
	} else {
  	  $("#fw-backend-option-fw-option-lsi_link_format").hide();
	}

    $( "input#post-format-link" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_link_format" ).fadeIn('slow');
        }
    } );
    
        $( "input#post-format-0" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_link_format" ).hide();
        }
    } );
    
        $( "input#post-format-gallery" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_link_format" ).hide();
        }
    } );
    
        $( "input#post-format-quote" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_link_format" ).hide();
        }
    } );

});


jQuery( document ).ready( function($) {

	if($('input#post-format-quote').attr('checked')) {
 	   $("#fw-backend-option-fw-option-lsi_quote_format").show();
	   $("#fw-backend-option-fw-option-lsi_quote_format_author").show();
	} else {
  	  $("#fw-backend-option-fw-option-lsi_quote_format").hide();
	  $("#fw-backend-option-fw-option-lsi_quote_format_author").hide();
	}

    $( "input#post-format-quote" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_quote_format" ).fadeIn('slow');
			$( "#fw-backend-option-fw-option-lsi_quote_format_author" ).fadeIn('slow');
        }
    } );
    
        $( "input#post-format-0" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_quote_format" ).hide();
			$( "#fw-backend-option-fw-option-lsi_quote_format_author" ).hide();
        }
    } );
    
        $( "input#post-format-gallery" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_quote_format" ).hide();
			$( "#fw-backend-option-fw-option-lsi_quote_format_author" ).hide();
        }
    } );
    
        $( "input#post-format-link" ).change( function() {
        if( $(this).is(':checked') ){
            $( "#fw-backend-option-fw-option-lsi_quote_format" ).hide();
			$( "#fw-backend-option-fw-option-lsi_quote_format_author" ).hide();
        }
    } );

});