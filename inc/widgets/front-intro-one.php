<?php


/*************************************************
* Intro One Widget
**************************************************/

/**
 * Register the Widget
 */
add_action( 'widgets_init',  function() {
    register_widget('resumee_intro_one_widget');
});


class resumee_intro_one_widget extends WP_Widget
{
    /**
     * Constructor
     **/
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'resumee_intro_one_widget',
            'description' => __('Resumee Intro Widget One', 'resumee'),
            'customize_selective_refresh' => true
        );

        parent::__construct( 'resumee_intro_one_widget', 'Resumee Intro Widget', $widget_ops );

        add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
        add_action('admin_enqueue_styles', array($this, 'upload_styles'));
        add_action('wp_enqueue_scripts', array(&$this, 'resumee_intro1_css'));
    }

    /**
     * Upload the Javascripts for the media uploader
     */
    public function upload_scripts()
    {
    if( function_exists( 'wp_enqueue_media' ) ) {
        
        wp_enqueue_media();
    }
        wp_enqueue_script('resumee_intro_one_widget', get_template_directory_uri() . '/js/media-upload.js');
    }


    /**
     * Add the styles for the upload media box
     */
    public function upload_styles()
    {
        wp_enqueue_style('thickbox');
    }




   /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
    public function widget( $args, $instance )
    {

            $image = isset( $instance['image'] ) ? apply_filters('widget_title', $instance['image'] ) : esc_url(get_template_directory_uri().'/assets/image/face3.jpg');
            $title = isset( $instance['title'] ) ? apply_filters('widget_title', $instance['title'] ) : __('Peter saint','resumee');
            $facebook = isset( $instance['facebook'] ) ? esc_url( $instance['facebook'] ) : '';
            $twitter = isset( $instance['twitter'] ) ? esc_url( $instance['twitter'] ) : '';
            $linkedin = isset( $instance['linkedin'] ) ? esc_url( $instance['linkedin'] ) : '';
            $googleplus = isset( $instance['googleplus'] ) ? esc_url( $instance['googleplus'] ) : '';
            $github = isset( $instance['github'] ) ? esc_url( $instance['github'] ) : '';
            $dribbble = isset( $instance['dribbble'] ) ? esc_url( $instance['dribbble'] ) : '';
            $icon1 = isset( $instance['icon1'] ) ? apply_filters('widget_title', $instance['icon1'] ) : 'facebook';
            $icon2 = isset( $instance['icon2'] ) ? apply_filters('widget_title', $instance['icon2'] ) : 'twitter';
            $icon3 = isset( $instance['icon3'] ) ? apply_filters('widget_title', $instance['icon3'] ) : 'linkedin';
            $icon4 = isset( $instance['icon4'] ) ? apply_filters('widget_title', $instance['icon4'] ) : 'github';
            $icon5 = isset( $instance['icon5'] ) ? apply_filters('widget_title', $instance['icon5'] ) : 'slack';
            $icon6 = isset( $instance['icon6'] ) ? apply_filters('widget_title', $instance['icon6'] ) : 'skype';

            $icon1display = isset( $instance['icon1display'] ) ? $instance['icon1display'] : '';
            $icon2display = isset( $instance['icon2display'] ) ? $instance['icon2display'] : '';
            $icon3display = isset( $instance['icon3display'] ) ? $instance['icon3display'] : '';
            $icon4display = isset( $instance['icon4display'] ) ? $instance['icon4display'] : '';
            $icon5display = isset( $instance['icon5display'] ) ? $instance['icon5display'] : '';
            $icon6display = isset( $instance['icon6display'] ) ? $instance['icon6display'] : '';
 
            $info = isset( $instance['info'] ) ? apply_filters('widget_title', $instance['info'] ) : __('peter.saint@gmail.com | (408) 553-3222 | NY, U.S.A','resumee');
            $summary = isset( $instance['summary'] ) ? apply_filters('widget_title', $instance['summary'] ) : __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl leo, aliquet sed magna sit amet, hendrerit sollicitudin velit.','resumee');


 
          /* Before widget (defined by themes). */
          echo $args['before_widget'] ;

            //if (isset($layouts) && $instance['layout1'] )
              echo '<section class="container intro_layout_zero">
                     <div class="row"><div class="intro_one_imgdiv">';
           
             if(isset($image) ){     
                      echo '<img class="img-rounded" height="200px" width="200px" src="'. esc_url($image) .'">';
                        
            }

            echo '</div>';

            if(isset($title) ){
            
               echo '<h2 class="intro1_h2">' . do_shortcode($title)  .'</h2>';
            }

            echo '<div class="header_social_links container">
                      <section class="socialbar_wrap"><a class="one" target="_blank" href="';


            if(isset($facebook) ){
            
               echo ''.esc_url($facebook).'">'; 
             }

            echo '<i class="fa fa-';            

            
            if(isset($icon1) ){
            
               echo ''.($icon1).'"aria-hidden="true">'; 
             }

             echo '</i></a>';


             echo '<a class="two" target="_blank" href="';

             if(isset($twitter) ){
            
               echo ''.esc_url($twitter).'">'; 
             }

            echo '<i class="fa fa-'; 

            if(isset($icon2) ){
            
               echo ''.($icon2).'"aria-hidden="true">'; 
             }

             echo '</i></a>';


             echo '<a class="three" target="_blank" href="';

             if(isset($linkedin)){
            
               echo ''.esc_url($linkedin).'">'; 
             }

            echo '<i class="fa fa-'; 

            if(isset($icon3) ){
            
               echo ''.($icon3).'"aria-hidden="true">'; 
             }

             echo '</i></a>';


             echo '<a class="four" target="_blank" href="';

             if(isset($googleplus) ){
            
               echo ''.esc_url($googleplus).'">'; 
             }

            echo '<i class="fa fa-'; 

            if(isset($icon4) ){
            
               echo ''.($icon4).'"aria-hidden="true">'; 
             }

             echo '</i></a>';


             echo '<a class="five" target="_blank" href="';

             if(isset($github) ){
            
               echo ''.esc_url($github).'">'; 
             }

            echo '<i class="fa fa-'; 

            if(isset($icon5) ){
            
               echo ''.($icon5).'"aria-hidden="true">'; 
             }

             echo '</i></a>';


             echo '<a class="six" target="_blank" href="';

             if(isset($dribbble) ){
            
               echo ''.esc_url($dribbble).'">'; 
             }

            echo '<i class="fa fa-'; 

            if(isset($icon6)){
            
               echo ''.($icon6).'"aria-hidden="true">'; 
             }

             echo '</i></a>';
            

            echo '</section>
                    <section class="intro_wrap">
                    <div class="row">';

            if(isset($info)){

               echo '<h3>'. do_shortcode($info) . '</h3>';
            }

            echo '</div>
                  </section>
                  <section class="intro_para">
                  <div class="row">';

            if(isset($summary) ){
            
               echo '<p class="intro1_p">'. do_shortcode($summary) . '</p>';
            }

            echo '</div>
                   </section>
                   </div>
                   </div>
                   </section>';


            if(is_customize_preview()){
              $id= $this->id;
              

              $icon1display =   'display:;';
              $icon2display =   'display:;';
              $icon3display =   'display:;';
              $icon4display =   'display:;';
              $icon5display =   'display:;';
              $icon6display =   'display:;';

  
              

              if ( ! empty( $instance['icon1display'] ) ) { $icon1display = 'display: ' . $instance['icon1display'] . '; ';}
              if ( ! empty( $instance['icon2display'] ) ) { $icon2display = 'display: ' . $instance['icon2display'] . '; ';}
              if ( ! empty( $instance['icon3display'] ) ) { $icon3display = 'display: ' . $instance['icon3display'] . '; ';}
              if ( ! empty( $instance['icon4display'] ) ) { $icon4display = 'display: ' . $instance['icon4display'] . '; ';}
              if ( ! empty( $instance['icon5display'] ) ) { $icon5display = 'display: ' . $instance['icon5display'] . '; ';}
              if ( ! empty( $instance['icon6display'] ) ) { $icon6display = 'display: ' . $instance['icon6display'] . '; ';}
     
  
              
              echo '<style>'.'#'.$id.' .header_social_links .one {'.$icon1display.'}#'.$id.' .header_social_links .two {'.$icon2display.'}#'.$id.' .header_social_links .four {'.$icon3display.'}#'.$id.' .header_social_links .three {'.$icon4display.'}#'.$id.' .header_social_links .five {'.$icon5display.'}#'.$id.' .header_social_links .six {'.$icon6display.'}</style>';
              
            }

          /* After widget (defined by themes). */
           echo $args['after_widget'] ;

    }


    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance )
    {

        /* Set up some default widget settings. */
        $defaults = array( 
          'image' =>  get_template_directory_uri().'/assets/image/face3.jpg', 
          'title' => __('Peter Saint', 'resumee') , 
          'facebook' => 'https://www.facebook.com/AsphaltThemes', 
          'icon1' => 'facebook', 
          'icon2' => 'twitter', 
          'icon3' => 'linkedin', 
          'icon4' => 'github', 
          'icon5' => 'slack', 
          'icon6' => 'skype',
          'icon1display'  => '',
          'icon2display'  => '',
          'icon3display'  => '',
          'icon4display'  => '',
          'icon5display'  => '',
          'icon6display'  => '',
          'twitter' => 'https://twitter.com/Asphalt_Themes', 
          'linkedin' => 'https://www.facebook.com/AsphaltThemes', 
          'googleplus' => 'https://www.facebook.com/AsphaltThemes', 
          'github' => 'https://www.facebook.com/AsphaltThemes', 
          'dribbble' => 'https://www.facebook.com/AsphaltThemes', 
          'info' => __('peter.saint@gmail.com | (408) 553-3222 | NY, U.S.A', 'resumee'), 
          'summary' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl leo, aliquet sed magna sit amet, hendrerit sollicitudin velit.', 'resumee'));
          
        $instance = wp_parse_args( (array) $instance, $defaults ); 

        
        ?>

        <p>
            <label style="max-width: 100%;overflow: hidden;" for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:', 'resumee'  ); ?></label> <span><?php _e(' (Suggested Size : 200 * 200 )' , 'resumee'); ?></span>
 
            <?php if (!empty($instance['image'])) { 
              ?> <img style="max-width: 100%;overflow: hidden;" src="<?php echo esc_url( $instance['image'] ); ?>" class="widgtimgprv" /> <span style="float:right;cursor: pointer;" class="mediaremvbtn">X</span><?php 
              }  ?>
            
            <input style="display:none;" name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $instance['image'] ); ?>" />
            <input style="    background-color: #0085ba;color: #fff;border: none;cursor: pointer;padding: 6px 5px;" class="upload_image_button" id="<?php echo $this->get_field_id( 'image' ).'-picker'; ?>" type="button" onClick="mediaPicker(this.id)" value="Upload Image" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Name:', 'resumee' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
        </p>

        

        <p>
          <label for="<?php echo $this->get_field_id( 'icon1' ); ?>"><?php _e('<b>Icon One:</b>', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon1' ); ?>" name="<?php echo $this->get_field_name( 'icon1' ); ?>" class="widefat">
            <option value="none" <?php if ( 'none' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('None', 'resumee') ?></option>
            <option value="facebook" <?php if ( 'facebook' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Facebook', 'resumee') ?></option>
            <option value="twitter" <?php if ( 'twitter' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Twitter', 'resumee') ?></option>
            <option value="pinterest" <?php if ( 'pinterest' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Pinterest', 'resumee') ?></option>
            <option value="skype" <?php if ( 'skype' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Skype', 'resumee') ?></option>
            <option value="behance" <?php if ( 'behance' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Behance', 'resumee') ?></option>
            <option value="stack-overflow" <?php if ( 'stack-overflow' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Stack Overflow', 'resumee') ?></option>
            <option value="xing" <?php if ( 'xing' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Xing', 'resumee') ?></option>
            <option value="flickr" <?php if ( 'flickr' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Flickr', 'resumee') ?></option>
            <option value="bitbucket" <?php if ( 'bitbucket' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Bitbucket', 'resumee') ?></option>
            <option value="youtube" <?php if ( 'youtube' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('YouTube', 'resumee') ?></option>
            <option value="wordpress" <?php if ( 'wordpress' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('WordPress', 'resumee') ?></option>
            <option value="weixin" <?php if ( 'weixin' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('WeChat', 'resumee') ?></option>
            <option value="slack" <?php if ( 'slack' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Slack', 'resumee') ?></option>
            <option value="instagram" <?php if ( 'instagram' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Instagram', 'resumee') ?></option>
            <option value="codepen" <?php if ( 'codepen' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('codepen', 'resumee') ?></option>
            <option value="dribbble" <?php if ( 'dribbble' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('dribbble', 'resumee') ?></option>
            <option value="linkedin" <?php if ( 'linkedin' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('linkedin', 'resumee') ?></option>
            <option value="google-plus" <?php if ( 'google-plus' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('google-plus', 'resumee') ?></option></select>
            <label for="<?php echo $this->get_field_name( 'facebook' ); ?>"><?php _e( 'Link:', 'resumee'  ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_url( $instance['facebook'] ); ?>" />
        </p>
        <label for="<?php echo $this->get_field_id( 'icon1display' ); ?>"><?php _e('Show Icon', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon1display' ); ?>" name="<?php echo $this->get_field_name( 'icon1display' ); ?>" class="widefat">
            <option value="" <?php if ( '' == $instance['icon1display'] ) echo 'selected="selected"'; ?>><?php _e('Show', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon1display'] ) echo 'selected="selected"'; ?>><?php _e('Hide', 'resumee') ?></option>
          </select>
         <br>
         <br>


        <p>
          <label for="<?php echo $this->get_field_id( 'icon2' ); ?>"><?php _e('<b>Icon Two:</b>', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon2' ); ?>" name="<?php echo $this->get_field_name( 'icon2' ); ?>" class="widefat">
           
            <option value="twitter" <?php if ( 'twitter' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Twitter', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('None', 'resumee') ?></option>
             <option value="facebook" <?php if ( 'facebook' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Facebook', 'resumee') ?></option>
            <option value="pinterest" <?php if ( 'pinterest' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Pinterest', 'resumee') ?></option>
            <option value="skype" <?php if ( 'skype' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Skype', 'resumee') ?></option>
            <option value="behance" <?php if ( 'behance' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Behance', 'resumee') ?></option>
            <option value="stack-overflow" <?php if ( 'stack-overflow' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Stack Overflow', 'resumee') ?></option>
            <option value="xing" <?php if ( 'xing' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Xing', 'resumee') ?></option>
            <option value="flickr" <?php if ( 'flickr' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Flickr', 'resumee') ?></option>
            <option value="bitbucket" <?php if ( 'bitbucket' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Bitbucket', 'resumee') ?></option>
            <option value="youtube" <?php if ( 'youtube' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('YouTube', 'resumee') ?></option>
            <option value="wordpress" <?php if ( 'wordpress' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('WordPress', 'resumee') ?></option>
            <option value="weixin" <?php if ( 'weixin' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('WeChat', 'resumee') ?></option>
            <option value="instagram" <?php if ( 'instagram' == $instance['icon2'] ) echo 'selected="selected"'; ?>><?php _e('Instagram', 'resumee') ?></option>
          </select>
          <label for="<?php echo $this->get_field_name( 'twitter' ); ?>"><?php _e( 'Link:', 'resumee'  ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_url( $instance['twitter'] ); ?>" />
        </p>
        <label for="<?php echo $this->get_field_id( 'icon2display' ); ?>"><?php _e('Show Icon', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon2display' ); ?>" name="<?php echo $this->get_field_name( 'icon2display' ); ?>" class="widefat">
            <option value="" <?php if ( '' == $instance['icon2display'] ) echo 'selected="selected"'; ?>><?php _e('Show', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon2display'] ) echo 'selected="selected"'; ?>><?php _e('Hide', 'resumee') ?></option>
          </select>

       <br>
       <br>
        <p>
          <label for="<?php echo $this->get_field_id( 'icon3' ); ?>"><?php _e('<b>Icon Three:</b>', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon3' ); ?>" name="<?php echo $this->get_field_name( 'icon3' ); ?>" class="widefat">
           
            <option value="pinterest" <?php if ( 'pinterest' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Pinterest', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('None', 'resumee') ?></option>
             <option value="facebook" <?php if ( 'facebook' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Facebook', 'resumee') ?></option>
            <option value="twitter" <?php if ( 'twitter' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Twitter', 'resumee') ?></option>
            <option value="skype" <?php if ( 'skype' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Skype', 'resumee') ?></option>
            <option value="behance" <?php if ( 'behance' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Behance', 'resumee') ?></option>
            <option value="stack-overflow" <?php if ( 'stack-overflow' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Stack Overflow', 'resumee') ?></option>
            <option value="xing" <?php if ( 'xing' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Xing', 'resumee') ?></option>
            <option value="flickr" <?php if ( 'flickr' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Flickr', 'resumee') ?></option>
            <option value="bitbucket" <?php if ( 'bitbucket' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Bitbucket', 'resumee') ?></option>
            <option value="youtube" <?php if ( 'youtube' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('YouTube', 'resumee') ?></option>
            <option value="wordpress" <?php if ( 'wordpress' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('WordPress', 'resumee') ?></option>
            <option value="weixin" <?php if ( 'weixin' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('WeChat', 'resumee') ?></option>
            <option value="slack" <?php if ( 'slack' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Slack', 'resumee') ?></option>
            <option value="instagram" <?php if ( 'instagram' == $instance['icon3'] ) echo 'selected="selected"'; ?>><?php _e('Instagram', 'resumee') ?></option>
          </select>
          <label for="<?php echo $this->get_field_name( 'linkedin' ); ?>"><?php _e( 'Icon Three Link:', 'resumee'  ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_url( $instance['linkedin'] ); ?>" />
        </p>
        <label for="<?php echo $this->get_field_id( 'icon3display' ); ?>"><?php _e('Show Icon', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon3display' ); ?>" name="<?php echo $this->get_field_name( 'icon3display' ); ?>" class="widefat">
            <option value="" <?php if ( '' == $instance['icon3display'] ) echo 'selected="selected"'; ?>><?php _e('Show', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon3display'] ) echo 'selected="selected"'; ?>><?php _e('Hide', 'resumee') ?></option>
          </select>
            
       <br>
       <br>

        <p>
          <label for="<?php echo $this->get_field_id( 'icon4' ); ?>"><?php _e('<b>Icon Four:</b>', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon4' ); ?>" name="<?php echo $this->get_field_name( 'icon4' ); ?>" class="widefat">
            <option value="linkedin" <?php if ( 'linkedin' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Linkedin', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('None', 'resumee') ?></option>
            <option value="skype" <?php if ( 'skype' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Skype', 'resumee') ?></option>
            <option value="facebook" <?php if ( 'facebook' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Facebook', 'resumee') ?></option>
            <option value="twitter" <?php if ( 'twitter' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Twitter', 'resumee') ?></option>
            <option value="pinterest" <?php if ( 'pinterest' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Pinterest', 'resumee') ?></option>
            <option value="behance" <?php if ( 'behance' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Behance', 'resumee') ?></option>
            <option value="stack-overflow" <?php if ( 'stack-overflow' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Stack Overflow', 'resumee') ?></option>
            <option value="flickr" <?php if ( 'flickr' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Flickr', 'resumee') ?></option>
            <option value="xing" <?php if ( 'xing' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Xing', 'resumee') ?></option>
            <option value="youtube" <?php if ( 'youtube' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('YouTube', 'resumee') ?></option>
            <option value="wordpress" <?php if ( 'wordpress' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('WordPress', 'resumee') ?></option>
            <option value="weixin" <?php if ( 'weixin' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('WeChat', 'resumee') ?></option>
            
            
            <option value="slack" <?php if ( 'slack' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Slack', 'resumee') ?></option>
            
            <option value="instagram" <?php if ( 'instagram' == $instance['icon4'] ) echo 'selected="selected"'; ?>><?php _e('Instagram', 'resumee') ?></option>
           
          </select>
          <label for="<?php echo $this->get_field_name( 'googleplus' ); ?>"><?php _e( 'Link:', 'resumee'  ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" type="text" value="<?php echo esc_url( $instance['googleplus'] ); ?>" />
        </p>
        <label for="<?php echo $this->get_field_id( 'icon4display' ); ?>"><?php _e('Show Icon', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon4display' ); ?>" name="<?php echo $this->get_field_name( 'icon4display' ); ?>" class="widefat">
            <option value="" <?php if ( '' == $instance['icon4display'] ) echo 'selected="selected"'; ?>><?php _e('Show', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon4display'] ) echo 'selected="selected"'; ?>><?php _e('Hide', 'resumee') ?></option>
          </select>

        <br>    
        <br>

        <p>
          <label for="<?php echo $this->get_field_id( 'icon5' ); ?>"><?php _e('<b>Icon Five:</b>', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon5' ); ?>" name="<?php echo $this->get_field_name( 'icon5' ); ?>" class="widefat">
           <option value="github" <?php if ( 'github' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Github', 'resumee') ?></option>
           <option value="none" <?php if ( 'none' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('None', 'resumee') ?></option>
            <option value="behance" <?php if ( 'behance' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Behance', 'resumee') ?></option>
             <option value="facebook" <?php if ( 'facebook' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Facebook', 'resumee') ?></option>
            <option value="twitter" <?php if ( 'twitter' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Twitter', 'resumee') ?></option>
            <option value="pinterest" <?php if ( 'pinterest' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Pinterest', 'resumee') ?></option>
            <option value="skype" <?php if ( 'skype' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Skype', 'resumee') ?></option>
            <option value="stack-overflow" <?php if ( 'stack-overflow' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Stack Overflow', 'resumee') ?></option>
            <option value="flickr" <?php if ( 'flickr' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Flickr', 'resumee') ?></option>
            <option value="xing" <?php if ( 'xing' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Xing', 'resumee') ?></option>
            <option value="youtube" <?php if ( 'youtube' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('YouTube', 'resumee') ?></option>
            <option value="wordpress" <?php if ( 'wordpress' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('WordPress', 'resumee') ?></option>
            <option value="weixin" <?php if ( 'weixin' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('WeChat', 'resumee') ?></option>
           
            <option value="slack" <?php if ( 'slack' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Slack', 'resumee') ?></option>

            <option value="instagram" <?php if ( 'instagram' == $instance['icon5'] ) echo 'selected="selected"'; ?>><?php _e('Instagram', 'resumee') ?></option>
           
          </select>
          <label for="<?php echo $this->get_field_name( 'github' ); ?>"><?php _e( 'Link:', 'resumee'  ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" type="text" value="<?php echo esc_url( $instance['github'] ); ?>" />
        </p>
        <label for="<?php echo $this->get_field_id( 'icon5display' ); ?>"><?php _e('Show Icon', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon5display' ); ?>" name="<?php echo $this->get_field_name( 'icon5display' ); ?>" class="widefat">
            <option value="" <?php if ( '' == $instance['icon5display'] ) echo 'selected="selected"'; ?>><?php _e('Show', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon5display'] ) echo 'selected="selected"'; ?>><?php _e('Hide', 'resumee') ?></option>
          </select>
        <br>
        <br>
        <p>
          <label for="<?php echo $this->get_field_id( 'icon6' ); ?>"><?php _e('<b>Icon Six:</b>', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon6' ); ?>" name="<?php echo $this->get_field_name( 'icon6' ); ?>" class="widefat">
             <option value="skype" <?php if ( 'skype' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Skype', 'resumee') ?></option>
             <option value="none" <?php if ( 'none' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('None', 'resumee') ?></option>
            <option value="stack-overflow" <?php if ( 'stack-overflow' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Stack Overflow', 'resumee') ?></option>
            <option value="facebook" <?php if ( 'facebook' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Facebook', 'resumee') ?></option>
            <option value="twitter" <?php if ( 'twitter' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Twitter', 'resumee') ?></option>
            <option value="pinterest" <?php if ( 'pinterest' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Pinterest', 'resumee') ?></option>
            <option value="xing" <?php if ( 'xing' == $instance['icon1'] ) echo 'selected="selected"'; ?>><?php _e('Xing', 'resumee') ?></option>
            <option value="behance" <?php if ( 'behance' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Behance', 'resumee') ?></option>
            <option value="flickr" <?php if ( 'flickr' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Flickr', 'resumee') ?></option>
            <option value="youtube" <?php if ( 'youtube' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('YouTube', 'resumee') ?></option>
            <option value="wordpress" <?php if ( 'wordpress' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('WordPress', 'resumee') ?></option>
            <option value="weixin" <?php if ( 'weixin' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('WeChat', 'resumee') ?></option>
           
            
            <option value="slack" <?php if ( 'slack' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Slack', 'resumee') ?></option>
           
            <option value="instagram" <?php if ( 'instagram' == $instance['icon6'] ) echo 'selected="selected"'; ?>><?php _e('Instagram', 'resumee') ?></option>
           
          </select>
          <label for="<?php echo $this->get_field_name( 'dribbble' ); ?>"><?php _e( 'Link:', 'resumee'  ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" type="text" value="<?php echo esc_url( $instance['dribbble'] ); ?>" />
        </p>
        <label for="<?php echo $this->get_field_id( 'icon6display' ); ?>"><?php _e('Show Icon', 'resumee') ?></label>
          <select id="<?php echo $this->get_field_id( 'icon6display' ); ?>" name="<?php echo $this->get_field_name( 'icon6display' ); ?>" class="widefat">
            <option value="" <?php if ( '' == $instance['icon6display'] ) echo 'selected="selected"'; ?>><?php _e('Show', 'resumee') ?></option>
            <option value="none" <?php if ( 'none' == $instance['icon6display'] ) echo 'selected="selected"'; ?>><?php _e('Hide', 'resumee') ?></option>
          </select>

        <br>
         <br>    


        <p>
            <label for="<?php echo $this->get_field_name( 'info' ); ?>"><?php _e( 'Info:', 'resumee'  ); ?> <span><?php _e('Ex: Email / Phone / Location' , 'resumee'); ?></span></label>
            <input placeholder="Email / Phone / Location" class="widefat" id="<?php echo $this->get_field_id( 'info' ); ?>" name="<?php echo $this->get_field_name( 'info' ); ?>" type="text" value="<?php echo esc_attr( $instance['info'] ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'summary' ); ?>"><?php _e( 'Career Summary:', 'resumee'  ); ?></label>
            <input placeholder="" class="widefat" id="<?php echo $this->get_field_id( 'summary' ); ?>" name="<?php echo $this->get_field_name( 'summary' ); ?>" type="text" value="<?php echo esc_attr( $instance['summary'] ); ?>" />
             
        </p>


      


        
    <?php
    }

    /**
       * Sanitize widget form values as they are saved.
       *
       * @see WP_Widget::update()
       *
       * @param array $new_instance Values just sent to be saved.
       * @param array $old_instance Previously saved values from database.
       *
       * @return array Updated safe values to be saved.
    */
    public function update( $new_instance, $old_instance ) {

        // update logic goes here
        $instance = $new_instance;
        $instance[ 'image' ] = esc_url( $new_instance[ 'image' ] );
        $instance[ 'title' ] = wp_kses_post( $new_instance[ 'title' ] );
        $instance[ 'facebook' ] = esc_url( $new_instance[ 'facebook' ] );
        $instance[ 'icon1' ] = wp_kses_post( $new_instance[ 'icon1' ] );
        $instance[ 'icon2' ] = wp_kses_post( $new_instance[ 'icon2' ] );
        $instance[ 'icon3' ] = wp_kses_post( $new_instance[ 'icon3' ] );
        $instance[ 'icon4' ] = wp_kses_post( $new_instance[ 'icon4' ] );
        $instance[ 'icon5' ] = wp_kses_post( $new_instance[ 'icon5' ] );
        $instance[ 'icon6' ] = wp_kses_post( $new_instance[ 'icon6' ] );
        $instance[ 'twitter' ] = esc_url( $new_instance[ 'twitter' ] );
        $instance[ 'linkedin' ] = esc_url( $new_instance[ 'linkedin' ] );
        $instance[ 'googleplus' ] = esc_url( $new_instance[ 'googleplus' ] );
        $instance[ 'github' ] = esc_url( $new_instance[ 'github' ] );
        $instance[ 'dribbble' ] = esc_url( $new_instance[ 'dribbble' ] );
        $instance[ 'info' ] = wp_kses_post( $new_instance[ 'info' ] );
        $instance[ 'summary' ] = wp_kses_post( $new_instance[ 'summary' ] );
        $instance['txtcolor'] = sanitize_hex_color($new_instance['txtcolor']);
        $instance['namecolor'] = sanitize_hex_color($new_instance['namecolor']);
        $instance['iconcolor'] = sanitize_hex_color($new_instance['iconcolor']);
        $instance[ 'icon1display' ] = wp_kses_post( $new_instance[ 'icon1display' ] );
        $instance[ 'icon2display' ] = wp_kses_post( $new_instance[ 'icon2display' ] );
        $instance[ 'icon3display' ] = wp_kses_post( $new_instance[ 'icon3display' ] );
        $instance[ 'icon4display' ] = wp_kses_post( $new_instance[ 'icon4display' ] );
        $instance[ 'icon5display' ] = wp_kses_post( $new_instance[ 'icon5display' ] );
        $instance[ 'icon6display' ] = wp_kses_post( $new_instance[ 'icon6display' ] );


        return $instance;
    }


    //ENQUEUE CSS
        function resumee_intro1_css() {

          $settings = $this->get_settings();
          if(!is_customize_preview()){
          if ( empty( $settings ) ) {
            return;
          }

          foreach ( $settings as $instance_id => $instance ) {
            $id = $this->id_base . '-' . $instance_id;

            if ( ! is_active_widget( false, $id, $this->id_base ) ) {
              continue;
            }

            $icon1display    =   'display:;';
            $icon2display    =   'display:;';
            $icon3display    =   'display:;';
            $icon4display    =   'display:;';
            $icon5display    =   'display:;';
            $icon6display    =   'display:;';

          



            if ( ! empty( $instance['icon1display'] ) ) {
              $icon1display = 'display: ' . $instance['icon1display'] . '; ';
            }

            if ( ! empty( $instance['icon2display'] ) ) {
              $icon2display = 'display: ' . $instance['icon2display'] . '; ';
            }

            if ( ! empty( $instance['icon3display'] ) ) {
              $icon3display = 'display: ' . $instance['icon3display'] . '; ';
            }

            if ( ! empty( $instance['icon4display'] ) ) {
              $icon4display = 'display: ' . $instance['icon4display'] . '; ';
            }

            if ( ! empty( $instance['icon5display'] ) ) {
              $icon5display = 'display: ' . $instance['icon5display'] . '; ';
            }

            if ( ! empty( $instance['icon6display'] ) ) {
              $icon6display = 'display: ' . $instance['icon6display'] . '; ';
            }

            
            
            $widget_style = '#'.$id.' .header_social_links .one {'.$icon1display.'}#'.$id.' .header_social_links .two {'.$icon2display.'}#'.$id.' .header_social_links .four {'.$icon3display.'}#'.$id.' .header_social_links .three {'.$icon4display.'}#'.$id.' .header_social_links .five {'.$icon5display.'}#'.$id.' .header_social_links .six {'.$icon6display.'}';
            wp_add_inline_style( 'resumee-style', $widget_style );
            
                }
              }

          }
}
      