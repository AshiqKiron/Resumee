<?php

/*****************************************************
* Education two Widget
*****************************************************/

//register widget backend
    class resumee_edu2_widget extends WP_Widget{

      
      public function __construct(){
        parent::__construct('edu_two_widget', __('Resume Education Widget', 'resumee'), array(
            'description' => __('Resume Education Widget', 'resumee'),
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


            $title = isset( $instance['title'] ) ? apply_filters('widget_title', $instance['title'] ) : __('Education','resumee');
            $edu1 = isset( $instance['edu1'] ) ? apply_filters('widget_title', $instance['edu1'] ) : __('> University of Wisconsin Madison, Expected 2017 , PhD in Computer Science , GPA - 4.00','resumee');
            $edu2 = isset( $instance['edu2'] ) ? apply_filters('widget_title', $instance['edu2'] ) : __('> University of Pennslyvania, 2011 - 2013 , M.S.E in Computer and Information Science , Minor: Mathmetics , GPA - 4.00','resumee');
            $edu3 = isset( $instance['edu3'] ) ? apply_filters('widget_title', $instance['edu3'] ) : __('> Cornell University, 2008 - 2011 , B.S.E in Computer Science Engineering , Minor: Mathmetics , GPA - 3.90','resumee');
            $edu4 = isset( $instance['edu4'] ) ? apply_filters('widget_title', $instance['edu4'] ) : __('> Armed Force College, 2007 , A.A Computer Science , GPA - 3.90','resumee');
  


            /* Before widget (defined by themes). */
            echo $args['before_widget'] ;
            
          echo '<section class="container edu_two">';

          if(isset($title) && !empty($title)){
               
              echo '<h3>'. do_shortcode($title) .'</h3>';
                        
            }

            echo '<div class="col-md-offset-1 edu_two_main">';

            if(isset($edu1) && !empty($edu1)){
            
               echo '<p>'. do_shortcode($edu1) .'</p>';
            }
            

            if(isset($edu2) && !empty($edu2)){
            
               echo '<p>'. do_shortcode($edu2) .'</p>';
            }

            if(isset($edu3) && !empty($edu3)){
            
               echo '<p>'. do_shortcode($edu3) .'</p>';
            }

            if(!isset($edu3) && empty($edu3)){
            
               echo '';
            }

            if(isset($edu4) && !empty($edu4)){
            
               echo '<p>'. do_shortcode($edu4) .'</p>';
            }

            if(!isset($edu4) && empty($edu4)){
            
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
                 'title' =>  __('Education', 'resumee'), 
                 'edu1' => __('> University of Wisconsin Madison, Expected 2017 , PhD in Computer Science , GPA - 4.00', 'resumee'), 
                 'edu2' => __('> University of Pennslyvania, 2011 - 2013 , M.S.E in Computer and Information Science , Minor: Mathmetics , GPA - 4.00', 'resumee'), 
                 'edu3' => __('> Cornell University, 2008 - 2011 , B.S.E in Computer Science Engineering , Minor: Mathmetics , GPA - 3.90', 'resumee'), 
                 'edu4' => __('> Armed Force College, 2007 , A.A Computer Science , GPA - 3.90', 'resumee')
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


      <!-- edu1 field -->
        <label for="<?php echo $this->get_field_id('edu1'); ?>"><?php _e('Education:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('edu1'); ?>" name="<?php echo $this->get_field_name('edu1'); ?>" value="<?php echo esc_attr( $instance['edu1'] ); ?>" type="text">
         
        <br>
        <br>

   

      <!-- edu2 field -->
        <label for="<?php echo $this->get_field_id('edu2'); ?>"><?php _e('Education:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('edu2'); ?>" name="<?php echo $this->get_field_name('edu2'); ?>" value="<?php echo esc_attr( $instance['edu2'] );  ?>" type="text">
        <br>
        <br>

      

      <!-- edu3 field -->
        <label for="<?php echo $this->get_field_id('edu3'); ?>"><?php _e('Education:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('edu3'); ?>" name="<?php echo $this->get_field_name('edu3'); ?>" value="<?php echo esc_attr( $instance['edu3'] ); ?>" type="text">
        <br>
        <br>


      <!-- edu4 field -->
        <label for="<?php echo $this->get_field_id('edu4'); ?>"><?php _e('Education:' , 'resumee'); ?></label>
        <br>
          <input class="widefat" id="<?php echo $this->get_field_id('edu4'); ?>" name="<?php echo $this->get_field_name('edu4'); ?>" value="<?php echo esc_attr( $instance['edu4'] ); ?>" type="text">
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
            $instance[ 'edu1' ] = wp_kses_post( $new_instance[ 'edu1' ] );
            $instance[ 'edu2' ] = wp_kses_post( $new_instance[ 'edu2' ] );
            $instance[ 'edu3' ] = wp_kses_post( $new_instance[ 'edu3' ] );
            $instance[ 'edu4' ] = wp_kses_post( $new_instance[ 'edu4' ] );
            return $instance;
         }

    }


    //regoster widget with hook
    function register_edu_two_widget(){
      register_widget( 'resumee_edu2_widget' );
    }
    add_action( 'widgets_init', 'register_edu_two_widget');


