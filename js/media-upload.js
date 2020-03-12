// JavaScript Documentecho 
    function mediaPicker(buttonid){

        var custom_uploader;

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {custom_uploader.open();return; }

        //CREATE THE MEDIA WINDOW
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: "Insert File",
            button: { text: "Insert File"},
            type: "file",
            multiple: false
        });

        //"INSERT MEDIA" ACTION. PREVIEW IMAGE AND INSERT VALUE TO INPUT FIELD
        custom_uploader.on("select", function(){
        var selection = custom_uploader.state().get("selection");
            selection.map( function( attachment ) {
                attachment = attachment.toJSON();
                console.log(attachment);
                console.log(attachment.url);
                
                jQuery('#'+buttonid).parent().find("input[type='text']").val(""+attachment.url+"").trigger("change");
                
                //Preview the Image
                if(attachment.url){
					jQuery('.widgtimgprv, .mediaremvbtn').remove();
                    jQuery('#'+buttonid).parent().find("input[type='text']").before('<img src="'+attachment.url+'" style="max-width: 100%;overflow: hidden;" class="widgtimgprv" /><span style="float:right;cursor: pointer;" class="mediaremvbtn">X</span>'); 
                }
            });
            
            

        });
        //OPEN THE MEDIA WINDOW
        custom_uploader.open();
    }
    
        jQuery( document ).on( 'load ready widget-added widget-updated', function () {
            jQuery(document).on('click', '.mediaremvbtn',function(e) {
                console.log('click');
                jQuery(this).parent().find("input[type='text']").val('').trigger('change');
                jQuery(this).parent().find('.widgtimgprv, .mediaremvbtn').remove();
        });
});