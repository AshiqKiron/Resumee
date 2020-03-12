(function( $ ) {
    wp.customize.bind( 'ready', function() {
        var customize = this;

        // Codes here
        var api = wp.customize;
		wp.customize.section( 'sidebar-widgets-frontpage-1' ).panel( 'frontpage');


    } );
})( jQuery );



jQuery(document).on('load ready', function() {

		jQuery('#available-widgets-list').append('<div class="widget-tpl" style="display:block;cursor:not-allowed;background:rgba(255, 255, 255, 0);opacity:0.6;"><div class="widget"><div class="widget-top"><div class="widget-title"><h3 style="cursor:not-allowed;">Resumee Reference Widget</h3></div></div><div class="widget-description">Upgrade to Pro to unlock this widget</div></div></div>');

		jQuery('#available-widgets-list').append('<div class="widget-tpl" style="display:block;cursor:not-allowed;background:rgba(255, 255, 255, 0);opacity:0.6;"><div class="widget"><div class="widget-top"><div class="widget-title"><h3 style="cursor:not-allowed;">Resumee Testimonial Widget</h3></div></div><div class="widget-description">Upgrade to Pro to unlock this widget</div></div></div>');

		jQuery('#available-widgets-list').append('<div class="widget-tpl" style="display:block;cursor:not-allowed;background:rgba(255, 255, 255, 0);opacity:0.6;"><div class="widget"><div class="widget-top"><div class="widget-title"><h3 style="cursor:not-allowed;">Resumee Project Widget</h3></div></div><div class="widget-description">Upgrade to Pro to unlock this widget</div></div></div>');

		jQuery('#available-widgets-list').append('<div class="widget-tpl" style="display:block;cursor:not-allowed;background:rgba(255, 255, 255, 0);opacity:0.6;"><div class="widget"><div class="widget-top"><div class="widget-title"><h3 style="cursor:not-allowed;">Resumee Widget Seperator</h3></div></div><div class="widget-description">Upgrade to Pro to unlock this widget</div></div></div>');


		jQuery('#available-widgets-list').append('<div class="widget-tpl" style="display:block;cursor:not-allowed;background:rgba(255, 255, 255, 0);opacity:0.6;"><div class="widget"><div class="widget-top"><div class="widget-title"><h3 style="cursor:not-allowed;">Resumee Intro Widget 2</h3></div></div><div class="widget-description">Upgrade to Pro to unlock this widget</div></div></div>');

		jQuery('#available-widgets-list').append('<div class="widget-tpl" style="display:block;cursor:not-allowed;background:rgba(255, 255, 255, 0);opacity:0.6;"><div class="widget"><div class="widget-top"><div class="widget-title"><h3 style="cursor:not-allowed;">Resumee Experience Widget 2</h3></div></div><div class="widget-description">Upgrade to Pro to unlock this widget</div></div></div>');

		jQuery('#available-widgets-list').append('<div class="widget-tpl" style="display:block;cursor:not-allowed;background:rgba(255, 255, 255, 0);opacity:0.6;"><div class="widget"><div class="widget-top"><div class="widget-title"><h3 style="cursor:not-allowed;">Resumee Education Widget 2</h3></div></div><div class="widget-description">Upgrade to Pro to unlock this widget</div></div></div>');

		jQuery('#available-widgets-list').append('<div class="widget-tpl" style="display:block;cursor:not-allowed;background:rgba(255, 255, 255, 0);opacity:0.6;"><div class="widget"><div class="widget-top"><div class="widget-title"><h3 style="cursor:not-allowed;">Resumee Skill Widget 2</h3></div></div><div class="widget-description">Upgrade to Pro to unlock this widget</div></div></div>');

	});