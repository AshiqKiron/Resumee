<?php

/*************************************************
* Experience Widget
**************************************************/

//register widget backend
    class resumee_experience1_widget extends WP_Widget{

      
      public function __construct(){
        parent::__construct('experience_one_widget', __('Resume Experience Widget', 'resumee'), array(
            'description' => __('Resume Experience Widget', 'resumee'),
            'customize_selective_refresh' => true
          ));
      }


      /**
       * Front-end display of widget.
       *
       * @see WP_Widget::widget()
       *
       * @param array $args     Widget arguments.
       * @param array $instance Saved values from database.
       */
      public function widget($args, $instance){

            $title = isset( $instance['title'] ) ? apply_filters('widget_title', $instance['title'] ) : __('Work Experience','resumee');
            $exp1 = isset( $instance['exp1'] ) ? apply_filters('widget_title', $instance['exp1'] ) : __('Title / Company Name / Jan, 2015 - present','resumee');
            $exp2 = isset( $instance['exp2'] ) ? apply_filters('widget_title', $instance['exp2'] ) : __('Title / Company Name / Jan, 2015 - present','resumee');
            $exp3 = isset( $instance['exp3'] ) ? apply_filters('widget_title', $instance['exp3'] ) : __('Title / Company Name / Jan, 2015 - present','resumee');
            $exp4 = isset( $instance['exp4'] ) ? apply_filters('widget_title', $instance['exp4'] ) : __('Title / Company Name / Jan, 2015 - present','resumee');
            $exp5 = isset( $instance['exp5'] ) ? apply_filters('widget_title', $instance['exp5'] ) : __('Title / Company Name / Jan, 2015 - present','resumee');
            $jd1 = isset( $instance['jd1'] ) ? apply_filters('widget_title', $instance['jd1'] ) : __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.','resumee');
            $jd2 = isset( $instance['jd2'] ) ? apply_filters('widget_title', $instance['jd2'] ) : __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.','resumee');
            $jd3 = isset( $instance['jd3'] ) ? apply_filters('widget_title', $instance['jd3'] ) : __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.','resumee');
            $jd4 = isset( $instance['jd4'] ) ? apply_filters('widget_title', $instance['jd4'] ) : __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.','resumee');
            $jd5 = isset( $instance['jd5'] ) ? apply_filters('widget_title', $instance['jd5'] ) : __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.','resumee');


 
           /* Before widget (defined by themes). */
          echo $args['before_widget'] ;
            
            echo '<div class="container experience">
                     <div class="col-md-12">';
          
          if(isset($title) && !empty($title)){
               
              echo '<h3 class="timeline">'. do_shortcode($title) .'</h3>';
                        
            }

            echo '<ul class="timeline">  
                      <li class="timeline-inverted">
                       <div class="timeline-badge warning"><i class="fa fa-circle"></i></div>
                        <div class="timeline-panel">
                         <div class="timeline-heading">';

            if(isset($exp1) && !empty($exp1)){
            
               echo '<h4 class="timeline-title">'. do_shortcode($exp1) .'</h4>';
            }

            echo '</div><div class="timeline-body"> ';


            if(isset($jd1) && !empty($jd1)){
            
               echo '<p>'. do_shortcode($jd1) .'</p>';
            }

            echo '</div></div></li><li class="timeline-inverted">
                     <div class="timeline-badge warning"><i class="fa fa-circle"></i></div>
                      <div class="timeline-panel">
                       <div class="timeline-heading">';

             if(isset($exp2) && !empty($exp2)){
            
               echo '<h4 class="timeline-title">'. do_shortcode($exp2) .'</h4>';
            }

            echo '</div><div class="timeline-body">';
            

            if(isset($jd2) && !empty($jd2)){
            
               echo '<p>'. do_shortcode($jd2) .'</p>';
            }

            echo '</div></div></li><li class="timeline-inverted">
                      <div class="timeline-badge warning"><i class="fa fa-circle"></i></div>
                       <div class="timeline-panel">
                        <div class="timeline-heading">';

            if(isset($exp3) && !empty($exp3)){
            
               echo '<h4 class="timeline-title">'. do_shortcode($exp3) .'</h4>';
            }

            echo '</div><div class="timeline-body">';
            

            if(isset($jd3) && !empty($jd3)){
            
               echo '<p>'. do_shortcode($jd3) .'</p></div></div></li>';
            }


            if(isset($exp4) && !empty($exp4)){
            
               echo '<li class="timeline-inverted">
                       <div class="timeline-badge warning"><i class="fa fa-circle"></i></div>
                        <div class="timeline-panel">
                         <div class="timeline-heading"><h4 class="timeline-title">'. do_shortcode($exp4) .'</h4></div><div class="timeline-body">';
            }

            if(!isset($exp4) && empty($exp4)) {

              echo '';
            }



            if(isset($jd4) && !empty($jd4)){
            
               echo '<p>'. do_shortcode($jd4) .'</p></div></div></li>';
            }

            if(!isset($jd4) && empty($jd4)){ 

              echo '';

            }

            if(isset($exp5) && !empty($exp5)){
            
               echo '<li class="timeline-inverted">
                     <div class="timeline-badge warning"><i class="fa fa-circle"></i></div>
                      <div class="timeline-panel">
                       <div class="timeline-heading"><h4 class="timeline-title">'. do_shortcode($exp5) .'</h4></div><div class="timeline-body">';
            }

            if(!isset($exp5) && empty($exp5)){

              echo '';

            }


            if(isset($jd5) && !empty($jd5)){
            
               echo '<p>'. do_shortcode($jd5) .'</p></div></div></li>';
            }

            if(!isset($jd5) && empty($jd5)){
            
               echo '';
            }
            
            

            echo '</ul></div></div>';

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
      public function form($instance){
            

             /* Set up some default widget settings. */
              $defaults = array( 
                 'title' =>  __('Work Experience', 'resumee'), 
                 'exp1' => __('Title / Company Name / Jan, 2015 - present', 'resumee'), 
                 'jd1' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.', 'resumee'), 
                 'exp2' => __('Title / Company Name / Jan, 2015 - present', 'resumee'), 
                 'jd2' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.', 'resumee'), 
                 'exp3' => __('Title / Company Name / Jan, 2015 - present', 'resumee'), 
                 'jd3' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.', 'resumee'),
                 'exp4' => __('Title / Company Name / Jan, 2015 - present', 'resumee'), 
                 'jd4' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.', 'resumee'),
                 'exp5' => __('Title / Company Name / Jan, 2015 - present', 'resumee'), 
                 'jd5' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur. Aliquam feugiat nec sem dapibus blandit. Nam non faucibus urna, at pulvinar nisl. Aliquam erat volutpat. Ut eget aliquet diam. In et Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor dapibus ipsum ut efficitur.', 'resumee')
                 );
              $instance = wp_parse_args( (array) $instance, $defaults ); 
           

        ?>
      
      <!-- title field -->
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" type="text">
        <br>
        <br>
        <br>


      <!-- exp1 field -->
        <label for="<?php echo $this->get_field_id('exp1'); ?>"><?php _e('<b>Experience One:</b>' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('exp1'); ?>" name="<?php echo $this->get_field_name('exp1'); ?>" value="<?php echo esc_attr( $instance['exp1'] ); ?>" type="text">
         

      <!-- jd1 field -->
        <label for="<?php echo $this->get_field_id('jd1'); ?>"><?php _e('Job Description:' , 'resumee'); ?></label>
        <br>
          <textarea class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('jd1'); ?>" name="<?php echo $this->get_field_name('jd1'); ?>"><?php echo esc_attr($instance['jd1']); ?></textarea>
             
        <br>
        <br>
        <br>
        <br>

   

      <!-- exp2 field -->
        <label for="<?php echo $this->get_field_id('exp2'); ?>"><?php _e('<b>Experience Two:</b>' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('exp2'); ?>" name="<?php echo $this->get_field_name('exp2'); ?>" value="<?php echo esc_attr( $instance['exp2'] ); ?>" type="text">


      <!-- jd2 field -->
        <label for="<?php echo $this->get_field_id('jd2'); ?>"><?php _e('Job Description:' , 'resumee'); ?></label>
        <br>
          <textarea class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('jd2'); ?>" name="<?php echo $this->get_field_name('jd2'); ?>"><?php echo esc_attr($instance['jd2']); ?></textarea>
        <br>
        <br>
        <br>
        <br>


      

      <!-- exp3 field -->
        <label for="<?php echo $this->get_field_id('exp3'); ?>"><?php _e('<b>Experience Three:</b>' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('exp3'); ?>" name="<?php echo $this->get_field_name('exp3'); ?>" value="<?php echo esc_attr( $instance['exp3'] ); ?>" type="text">
        


       <!-- jd3 field -->
        <label for="<?php echo $this->get_field_id('jd3'); ?>"><?php _e('Job Description:' , 'resumee'); ?></label>
        <br>
          <textarea class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('jd3'); ?>" name="<?php echo $this->get_field_name('jd3'); ?>"><?php echo esc_attr($instance['jd3']); ?></textarea>
        <br>
        <br>
        <br>
        <br>



      <!-- exp4 field -->
        <label for="<?php echo $this->get_field_id('exp4'); ?>"><?php _e('<b>Experience Four:</b>' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('exp4'); ?>" name="<?php echo $this->get_field_name('exp4'); ?>" value="<?php echo esc_attr( $instance['exp4'] ); ?>" type="text">
       


       <!-- jd4 field -->
        <label for="<?php echo $this->get_field_id('jd4'); ?>"><?php _e('Job Description:' , 'resumee'); ?></label>
        <br>
          <textarea class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('jd4'); ?>" name="<?php echo $this->get_field_name('jd4'); ?>"><?php echo esc_attr($instance['jd4']); ?></textarea>
        <br>
        <br>
        <br>
        <br>


      <!-- exp5 field -->
        <label for="<?php echo $this->get_field_id('exp5'); ?>"><?php _e('<b>Experience Five:</b>' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('exp5'); ?>" name="<?php echo $this->get_field_name('exp5'); ?>" value="<?php echo esc_attr( $instance['exp5'] ); ?>" type="text">
        


       <!-- jd5 field -->
        <label for="<?php echo $this->get_field_id('jd5'); ?>"><?php _e('Job Description:' , 'resumee'); ?></label>
        <br>
          <textarea class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('jd5'); ?>" name="<?php echo $this->get_field_name('jd5'); ?>"><?php echo esc_attr($instance['jd5']); ?></textarea>
        <br>
        <br>

            

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
            $instance = $old_instance;
            $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
            $instance[ 'exp1' ] = wp_kses_post( $new_instance[ 'exp1' ] );
            $instance[ 'jd1' ] = wp_kses_post( $new_instance[ 'jd1' ] );
            $instance[ 'exp2' ] = wp_kses_post( $new_instance[ 'exp2' ] );
            $instance[ 'jd2' ] = wp_kses_post( $new_instance[ 'jd2' ] );
            $instance[ 'exp3' ] = wp_kses_post( $new_instance[ 'exp3' ] );
            $instance[ 'jd3' ] = wp_kses_post( $new_instance[ 'jd3' ] );
            $instance[ 'exp4' ] = wp_kses_post( $new_instance[ 'exp4' ] );
            $instance[ 'jd4' ] = wp_kses_post( $new_instance[ 'jd4' ] );
            $instance[ 'exp5' ] = wp_kses_post( $new_instance[ 'exp5' ] );
            $instance[ 'jd5' ] = wp_kses_post( $new_instance[ 'jd5' ] );
            return $instance;
         }

    }


    //regoster widget with hook
    function register_experience_one_widget(){
      register_widget( 'resumee_experience1_widget' );
    }
    add_action( 'widgets_init', 'register_experience_one_widget');

