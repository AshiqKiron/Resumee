<?php global $resumee;

function resumee_customizer_styles() {
  wp_enqueue_style(
    'custom-style',
    get_template_directory_uri() . '/style.css'
  );
        $color = get_header_image();  //E.g. #FF0000
        $custom_css = "
                #masthead{
                        background-image: url({$color});
                        background-size:cover;
                        background-repeat:no-repeat;
                }";
        
        wp_add_inline_style( 'custom-style', $custom_css );
       
}
add_action( 'wp_enqueue_scripts', 'resumee_customizer_styles' );


function resumee_customizer_css() {
	global $resumee;
    ?>
    <style type="text/css">
  
      /*body {color: <?php echo esc_html(get_option('$resumee[header]')); ?>;}*/
      .menu-toggle {background: <?php echo esc_html($resumee['nav_color']); ?>;}
      #masthead {background-color: <?php echo esc_html($resumee['nav_background']); ?>;}
      body {font-family: <?php echo esc_html($resumee['body_font_family']); ?>;}
      body {line-height: <?php echo esc_html($resumee['body_line_height']); ?>em;}
      body {font-size: <?php echo esc_html($resumee['body_font_size']); ?>px;}
      .footer_address span {color: <?php echo esc_html($resumee['colophon_txt_color']); ?>;}

      
    </style>
    <?php
}
add_action( 'wp_head', 'resumee_customizer_css' );
