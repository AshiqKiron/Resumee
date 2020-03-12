<?php

/*************************************************
* Skill One Widget
**************************************************/

//register widget backend
    class resumee_skill1_widget extends WP_Widget{

      
      public function __construct(){
        parent::__construct('skill_one_widget', __('Resume Skill Widget', 'resumee'), array(
            'description' => __('Resume Skill Widget', 'resumee'),
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

            $title = isset( $instance['title'] ) ? apply_filters('widget_title', $instance['title'] ) : __('Skills','resumee');
            $skill1 = isset( $instance['skill1'] ) ? apply_filters('widget_title', $instance['skill1'] ) : __(' - Computer Skill: Proficient in Windows and Apple applications, Excel Wizardy','resumee');
            $skill2 = isset( $instance['skill2'] ) ? apply_filters('widget_title', $instance['skill2'] ) : __('  - Programming Skill: C++, PHP, Java, Python, JavaScript, Scala, Go, MySQL, Erlang, Ruby, Swift, Perl and Linux','resumee');
            $skill3 = isset( $instance['skill3'] ) ? apply_filters('widget_title', $instance['skill3'] ) : __(' - Language Skill: English, French, Spanish, Urdu, Arabic and sign language','resumee');
            $skill4 = isset( $instance['skill4'] ) ? apply_filters('widget_title', $instance['skill4'] ) : __('  - Typing Skill: English[90 WPM], French[30 WPM], Spanish[60 WPM] and Urdu[10 WPM]','resumee');


          


            /* Before widget (defined by themes). */
            echo $args['before_widget'] ;
            
          echo '<section class="container skills">
                     <div class="skills_wrap">';

          if(isset($title) && !empty($title)){
               
              echo '<h3>'. do_shortcode($title) .'</h3>';
                        
            }

            echo '<div class="skills col-md-offset-1">';

            if(isset($skill1) && !empty($skill1)){
            
               echo '<p>'. do_shortcode($skill1) .'</p>';
            }
            

            if(isset($skill2) && !empty($skill2)){
            
               echo '<p>'. do_shortcode($skill2) .'</p>';
            }

            if(isset($skill3) && !empty($skill3)){
            
               echo '<p>'. do_shortcode($skill3) .'</p>';
            }

            if(isset($skill4) && !empty($skill4)){
            
               echo '<p>'. do_shortcode($skill4) .'</p>';
            }

            if(!isset($skill4) && empty($skill4)){
            
               echo '';
            }

            echo '</div></div></section>';

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
                 'title' =>  __('Skill', 'resumee'), 
                 'skill1' => __(' - Computer Skill: Proficient in Windows and Apple applications, Excel Wizardy', 'resumee'), 
                 'skill2' => __(' - Programming Skill: C++, PHP, Java, Python, JavaScript, Scala, Go, MySQL, Erlang, Ruby, Swift, Perl and Linux', 'resumee'), 
                 'skill3' => __(' - Language Skill: English, French, Spanish, Urdu, Arabic and sign language', 'resumee'), 
                 'skill4' => __(' - Typing Skill: English[90 WPM], French[30 WPM], Spanish[60 WPM] and Urdu[10 WPM]', 'resumee')
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


      <!-- skill1 field -->
        <label for="<?php echo $this->get_field_id('skill1'); ?>"><?php _e('Skill:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('skill1'); ?>" name="<?php echo $this->get_field_name('skill1'); ?>" value="<?php echo esc_attr( $instance['skill1'] ); ?>" type="text">
         
        <br>
        <br>

   

      <!-- skill2 field -->
        <label for="<?php echo $this->get_field_id('skill2'); ?>"><?php _e('Skill:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('skill2'); ?>" name="<?php echo $this->get_field_name('skill2'); ?>" value="<?php echo esc_attr( $instance['skill2'] ); ?>" type="text">
        <br>
        <br>

      

      <!-- skill3 field -->
        <label for="<?php echo $this->get_field_id('skill3'); ?>"><?php _e('Skill:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('skill3'); ?>" name="<?php echo $this->get_field_name('skill3'); ?>" value="<?php echo esc_attr( $instance['skill3'] ); ?>" type="text">
        <br>
        <br>


      <!-- skill4 field -->
        <label for="<?php echo $this->get_field_id('skill4'); ?>"><?php _e('Skill:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('skill4'); ?>" name="<?php echo $this->get_field_name('skill4'); ?>" value="<?php echo esc_attr( $instance['skill4'] ); ?>" type="text">
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
            $instance[ 'skill1' ] = wp_kses_post( $new_instance[ 'skill1' ] );
            $instance[ 'skill2' ] = wp_kses_post( $new_instance[ 'skill2' ] );
            $instance[ 'skill3' ] = wp_kses_post( $new_instance[ 'skill3' ] );
            $instance[ 'skill4' ] = wp_kses_post( $new_instance[ 'skill4' ] );
            return $instance;
         }

    }


    //register widget with hook
    function register_skill_one_widget(){
      register_widget( 'resumee_skill1_widget' );
    }
    add_action( 'widgets_init', 'register_skill_one_widget');