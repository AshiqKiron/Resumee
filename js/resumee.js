/* Other JS snippets used in this theme*/

jQuery(document).ready(function(){


    // Scroll to top
    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 600) {
            jQuery('i.fa.fa-chevron-up').fadeIn();
        } else {
            jQuery('i.fa.fa-chevron-up').fadeOut();
        }
    });
    
    //Click event to scroll to top
    jQuery('i.fa.fa-chevron-up').click(function(){
        jQuery('html, body').animate({scrollTop : 0},800);
        return false;
    });

      //Make sure the footer always stays to the bottom of the page when the page is short
      var docHeight = jQuery(window).height();
      var footerHeight = jQuery('#colophon').height();
      var footerTop = jQuery('#colophon').position().top + footerHeight;
       
      if (footerTop < docHeight) {  jQuery('#colophon').css('margin-top', 1 + (docHeight - footerTop) + 'px');  }


        //Sidr Mobile Menu
        var padmenu = jQuery(".menu-toggle").html();
        jQuery('.menu-toggle').sidr({
         name: 'sidr-main',
         source: '#site-navigation',
         side: 'right'
        });
        jQuery(".sidr").prepend("<div class='pad_menutitle'>"+padmenu+"<span style='curson:pointer;'><i class='fa fa-times'></i></span></div>");
        
        jQuery(".pad_menutitle span").click(function() {
            jQuery.sidr('close', 'sidr-main')
            preventDefaultEvents: false;
        });
});


