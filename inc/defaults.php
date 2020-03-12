<?php
function resumee_option_defaults() {
	$defaults = array(
		'nav_color' => '#fff',
		'nav_background' => '#fff',
		'body_font_family' => 'Open Sans',
		'body_line_height' => '1.7',
		'body_font_size' => '15',
		'colophon_txt' => 'Contact : Seasame Street, 1st Floor San Francisco, CA 12345',
		'colophon_txt_color' => '#333',

	);
	
	
      $options = get_option('resumee',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

		return $options;
}

?>