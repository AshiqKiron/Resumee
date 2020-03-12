/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

    //Nav Hamburger color
	wp.customize( 'resumee[nav_color]', function( value ) {
        value.bind( function( to ) {
            $( '.menu-toggle' ).css( 'background', to );
        } );
    });

    //Nav bg color
	wp.customize( 'resumee[nav_background]', function( value ) {
        value.bind( function( to ) {
            $( '#masthead' ).css( 'background-color', to );
        } );
    });

    //site font family
     wp.customize( 'resumee[body_font_family]', function( value ) {
        value.bind( function( to ) {            
            $( 'body' ).css('font-family', to );            
        } );
    });  

     //Site Line height
     wp.customize( 'resumee[body_line_height]', function( value ) {
        value.bind( function( to ) {             
            $( 'body' ).css( 'line-height', to + 'em' );            
        } );
    });

    //Site Font Size
     wp.customize( 'resumee[body_font_size]', function( value ) {
        value.bind( function( to ) {             
            $( 'body' ).css( 'font-size', to + 'px' );            
        } );
    });  


    // Colophon text
	wp.customize( 'resumee[colophon_txt]', function( value ) {
		value.bind( function( to ) {
			$( '.footer_address span' ).text( to );
		} );
	} );

	//Colophon text color
	wp.customize( 'resumee[colophon_txt_color]', function( value ) {
        value.bind( function( to ) {
            $( '.footer_address span' ).css( 'color', to );
        } );
    });



} )( jQuery );