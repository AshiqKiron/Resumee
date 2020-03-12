<?php global $resumee;
/**
 * resumee Theme Customizer
 *
 * @package resumee
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function resumee_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Moving default sections
	//$wp_customize->get_section('nav_menus')->panel = 'header';
	$wp_customize->get_section('header_image')->panel = 'header';
	$wp_customize->get_section('title_tagline')->panel = 'header';
	$wp_customize->get_section('static_front_page')->panel = 'frontpage';
	$wp_customize->get_section('colors')->panel = 'basic_settings';
	$wp_customize->get_section('background_image')->panel = 'basic_settings';
	$wp_customize->get_control('header_textcolor')->section = 'header_section';

	// Abort if selective refresh is not available.
    if ( ! isset( $wp_customize->selective_refresh ) ) {
        return;
    }

	// Panel
	$wp_customize->add_panel( 'header', array(
            'priority' => 10,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => esc_html__( 'Header', 'resumee' ),
            'description' => esc_html__( 'This panel allows you to customize Header', 'resumee' ),
    	)
    );

    $wp_customize->add_panel( 'frontpage', array(
            'priority' => 11,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => esc_html__( 'Frontpage', 'resumee' ),
            'description' => esc_html__( 'This panel allows you to customize Frontpage', 'resumee' ),
    	)
    );

    $wp_customize->add_panel( 'basic_settings', array(
            'priority' => 9,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => esc_html__( 'Basic Site Settings', 'resumee' ),
            'description' => esc_html__( 'This panel allows you to customize site settings', 'resumee' ),
    	)
    );

    $wp_customize->add_panel( 'footer', array(
            'priority' => 13,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => esc_html__( 'Footer', 'resumee' ),
            'description' => esc_html__( 'This panel allows you to customize Footer', 'resumee' ),
    	)
    );


    // custom content class
      if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'resumee_Custom_Content' ) ) :
			class resumee_Custom_Content extends WP_Customize_Control {
				 // Whitelist content parameter
				 public $content = '';
				 /**
				 * Render the control's content.
				 *
				 * Allows the content to be overriden without having to rewrite the wrapper.
				 *
				 * @since   1.0.0
				 * @return  void
				 */
				 public function render_content() {
				 if ( isset( $this->label ) ) {
					 echo '<span class="customize-control-title">' . $this->label . '</span>';
				 }
				 if ( isset( $this->content ) ) {
					 echo $this->content;
				 }
				 if ( isset( $this->description ) ) {
				 	 echo '<span class="description customize-control-description">' . $this->description . '</span>';
				 }
			   }
			}
		endif;



    // Header Section
	$wp_customize->add_section( 'header_section' , array(
		    'title'      => esc_html__('Navigation','resumee'), 
		    'panel'      => 'header',
		    'capability'     => 'edit_theme_options',
		    'priority'   => 10   
		)
	);  

	// Nav Color
	$wp_customize->add_setting('resumee[nav_color]',array(
		          'default'         => '#fff',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option',
		)
	);
				// Control
				$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_color', array(
				               'label'      => esc_html__( 'Hamburger Color', 'resumee' ),
				               'section'    => 'header_section',
				               'settings'   => 'resumee[nav_color]' 
				           )
				       )
				   );

	// Nav background
	$wp_customize->add_setting('resumee[nav_background]',array(
		          'default'         => '#fff',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option',
		)
	);
				// Control
				$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_background', array(
				               'label'      => esc_html__( 'Background Color', 'resumee' ),
				               'section'    => 'header_section',
				               'settings'   => 'resumee[nav_background]' 
				           )
				       )
				   );

	// static frontpage info
	$wp_customize->add_setting( 'resumee[fp_instruction]', array(
			    'default' => '',
			    'sanitize_callback' => 'resumee_sanitize_text',
			    'type'   => 'option'
			) );

			// Control
		    $wp_customize->add_control( new resumee_Custom_Content( $wp_customize, 'fp_instruction', array(
			 'section' => 'static_front_page',
			 'content' => sprintf( __( '<h2>To Setup frontpage, Go to:</h2></br>
		<ul>
		<li>1. <b>Dashboard -> Pages -> Add New</b></li>
		<li>2. On the right, you will find a box titled <b>Page Attributes</b></li>
		<li>3. Select <b>Front Page Template</b> from the dropdown <b>Template</b> options</li>
		<li>4. Type Page title & click on <b>Publish</b></li>
		<li>5. Go to <b>Dashboard -> Settings -> Reading -> Front page displays </b></li>
		<li>6. Select <b>A static page(select below)</b> </li>
		<li>7. Then select the page with <b>"Front Page Template"</b> as <b>Front Page</b></li>
		<li>8. Click on <b>Save & Publish</b> and you are done.</li>
		<li>9. Still struggling? Follow the documentation <a target="_blank" href="%s">Front Page Setup Documentation</a>
		</ul></br>', 'resumee' ), esc_url( 'https://asphaltthemes.com/docs/resumee/how-to-setup-frontpage/' )),
			 'settings' =>  'resumee[fp_instruction]',
		) ) );




	// basic  Section
	$wp_customize->add_section( 'basic_site_section' , array(
		    'title'      => esc_html__('Site Settings','resumee'), 
		    'panel'      => 'misc',
		    'capability'     => 'edit_theme_options',
		    'priority'   => 10   
		)
	);  


	// Typography Section
	$wp_customize->add_section( 'typorgraphy_section' , array(
		    'title'      => esc_html__('Typography Settings','resumee'), 
		    'panel'      => 'basic_settings',
		    'capability'     => 'edit_theme_options',
		    'priority'   => 10   
		)
	); 

	//site font family 
	$wp_customize->add_setting('resumee[body_font_family]',array(
		          'default'         => 'Open Sans',
		          'sanitize_callback' => 'wp_kses_post',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		);

				// Control
				$wp_customize->add_control(new WP_Customize_Control($wp_customize,'body_font_family', array(
		                'label'          => __( 'Font-Family', 'resumee' ),
		                'section'        => 'typorgraphy_section',
		                'settings'       => 'resumee[body_font_family]',
		                'type'           => 'select',
		                'choices'        => resumee_fonts()
		            )
		        )       
		   );

	//site body_line_height
	$wp_customize->add_setting('resumee[body_line_height]',array(
		          'default'         => '1.7',
		          'sanitize_callback' => 'wp_kses_post',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		);

				
		   		// Control
		   		$wp_customize->add_control(new WP_Customize_Control($wp_customize,'body_line_height', array(
		                'label'          => __( 'Line Height', 'resumee' ),
		                'section'        => 'typorgraphy_section',
		                'settings'       => 'resumee[body_line_height]',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '1',
					    'max' => '2',
					    'step' => '.1',
					  )
		            )
		        )       
		   );


	//site body_ font size
	$wp_customize->add_setting('resumee[body_font_size]',array(
		          'default'         => '16',
		          'sanitize_callback' => 'wp_kses_post',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		);

				
		   		// Control
		   		$wp_customize->add_control(new WP_Customize_Control($wp_customize,'body_font_size', array(
		                'label'          => __( 'Font Size', 'resumee' ),
		                'section'        => 'typorgraphy_section',
		                'settings'       => 'resumee[body_font_size]',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '12',
					    'max' => '20',
					    'step' => '1',
					  )
		            )
		        )       
		   );



	// Footer  Section
	$wp_customize->add_section( 'footer_section' , array(
		    'title'      => esc_html__('Footer settings','resumee'), 
		    'panel'      => 'footer',
		    'capability'     => 'edit_theme_options',
		    'priority'   => 10   
		)
	);  

	// colophon text 
	$wp_customize->add_setting('colophon_txt',array(
		          'default'         => 'Contact : Seasame Street, 1st Floor San Francisco, CA 12345',
		          'transport'       => 'postMessage',
		          'sanitize_callback' => 'resumee_sanitize_text',
		          'type'            => 'option',
		)
	);
				// Control
				$wp_customize->add_control('colophon_txt', array(
				               'label'      => esc_html__( 'Footer Contact Text', 'resumee' ),
				               'section'    => 'footer_section',
				               'settings'   => 'colophon_txt' 
				           )
				   );

	// colophone text color
	$wp_customize->add_setting('resumee[colophon_txt_color]',array(
		          'default'         => '#333',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option',
		)
	);
				// Control
				$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'colophon_txt_color', array(
				               'label'      => esc_html__( 'Color', 'resumee' ),
				               'section'    => 'footer_section',
				               'settings'   => 'resumee[colophon_txt_color]' 
				           )
				       )
				   );

	
}
add_action( 'customize_register', 'resumee_customize_register' );





function resumee_fonts(){
    
    $font_family_array = array(
        'Arial, Helvetica, sans-serif'          => 'Arial',
        'Arial Black, Gadget, sans-serif'       => 'Arial Black',
        'Courier New', 'monospace'              => 'Courier New',
        'Lobster Two, cursive'                  => 'Lobster - Cursive',
        'Georgia, serif'                        => 'Georgia',
        'Impact, Charcoal, sans-serif'          => 'Impact',
        'Lucida Console, Monaco, monospace'     => 'Lucida Console',
        'Lucida Sans Unicode sans-serif'	    => 'Lucida Sans Unicode',
        'MS Sans Serif, Geneva, sans-serif'     => 'MS Sans Serif',
        'MS Serif, New York, serif'             => 'MS Serif',
        'Open Sans, sans-serif'                 => 'Open Sans',
        'Source Sans Pro, sans-serif'           => 'Source Sans Pro',
        'Lato, sans-serif'                      => 'Lato',
        'Tahoma, Geneva, sans-serif'            => 'Tahoma',
        'Times New Roman, Times, serif'         => 'Times New Roman',
        'Trebuchet MS, sans-serif'              => 'Trebuchet MS',
        'Verdana, Geneva, sans-serif'           => 'Verdana',
        'Raleway, sans-serif'                   => 'Raleway',
        'Roboto Condensed, sans-serif'          => 'Robot Condensed',
        'PT Sans, sans-serif'                   => 'PT Sans',
        'Open Sans Condensed, sans-serif'       => 'Open Sans Condensed',
        'Roboto Slab, sans-serif'               => 'Roboto Slab',
        'Anonymous Pro, sans-serif'				=> 'Anonymous Pro',
        'Merriweather, sans-serif'				=> 'Merriweather',
        'Neuton, sans-serif'					=> 'Neuton',
        'Poppins, sans-serif'					=> 'Poppins',
        'Noto Sans, sans-serif'					=> 'Noto Sans',
    );
    
    return $font_family_array;
}






// Sanitize text field
function resumee_sanitize_text( $text ) {

    return wp_kses_post( force_balance_tags( $text ) );
}

// Sanitize textarea 
function resumee_sanitize_css( $input ) {
	return wp_filter_nohtml_kses( $input );
}


// checkbox sanitization
   function resumee_checkbox_sanitize($input) {
      if ( $input == 1 ) {
         return 1;
      } else {
         return '';
      }
   }

// icon sanitization
function resumee_icon_sanitize( $input ) {
    
    $valid_keys = athena_icons();
    
    if (array_key_exists($input, $valid_keys)) {
        return $input;
    } else {
        return '';
    }
    
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function resumee_customize_preview_js() {
	wp_enqueue_script( 'resumee_customizer', get_template_directory_uri() .'/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'resumee_customize_preview_js' );


function resumee_customizer_misc_js() {
	wp_enqueue_script( 'resumee-customizer-widget-js', get_template_directory_uri() .'/js/customizer-control.js', array( 'customize-controls' , 'jquery'), null, true );

}
add_action( 'customize_controls_enqueue_scripts', 'resumee_customizer_misc_js' );