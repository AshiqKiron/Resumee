/**
 * Upsell notice for theme
 */
 jQuery(window).bind("load", function() {

 // Add Upgrade Message
 if ('undefined' !== typeof resumeeL10n) {
 upsell = jQuery('<a class="resumee-upsell-link"></a>')
 .attr('href', resumeeL10n.resumeeURL)
 .attr('target', '_blank')
 .text(resumeeL10n.resumeeLabel)
 .css({
 'display' : 'inline-block',
 'background-color' : '#F44336',
 'color' : '#fff',
 /*'text-transform' : 'uppercase',*/
 'margin-top' : '6px',
 'padding' : '10px 7px',
 'font-size': '10px',
 'letter-spacing': '.5px',
 'line-height': '1.5',
 'clear' : 'both',
 'font-weight' : 'bold',
 'text-decoration' : 'none',
 }) ;

 //appending upgrade to PRO fields
jQuery('#accordion-section-themes h3').append(upsell);

// Remove accordion click event
 jQuery('.resumee-upsell-link').on('click', function(e) {
	 e.stopPropagation();
});
 }
});