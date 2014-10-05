<?php
/**
 * Plugin Name: SCC Filigree Widgets
 * Plugin URI: http://sakkaraclothing.com
 * Description: Simple widgets that are just fancy-looking separators
 * Version: 0.1
 * Author: Brian Enigma
 * Author URI: http://netninja.com
 */

class Filigree1 extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct(
			'scc_filigree1', // Base ID
			__('Filigree-Horn', 'text_domain'), // Name
			array( 'description' => __( 'A filigree separator that looks like a horn', 'text_domain' ), ) // Args
		);	
    }

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        $image = plugins_url( 'filigree-horn.png', __FILE__ );
        echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
        echo '<p style="text-align:center;">';
		echo '<img src="' . $image . '" width="117" height="38" class="img_scc_filigree" />';
        echo '</p>';
		echo $args['after_widget'];
    }

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

add_action( 'widgets_init', function(){
     register_widget( 'Filigree1' );
 });

class Filigree2 extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct(
			'scc_filigree2', // Base ID
			__('Filigree-Line', 'text_domain'), // Name
			array( 'description' => __( 'A filigree separator that looks like a line', 'text_domain' ), ) // Args
		);	
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
        $image = plugins_url( 'filigree-line.png', __FILE__ );
        echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
        echo '<p style="text-align:center;">';
		echo '<img src="' . $image . '" width="132" height="12" class="img_scc_filigree" />';
        echo '</p>';
		echo $args['after_widget'];
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

add_action( 'widgets_init', function(){
     register_widget( 'Filigree2' );
});

function your_css_and_js() {
    wp_register_style('scc_filigree_style', plugins_url('scc_filigree_style.css', __FILE__));
    wp_enqueue_style('scc_filigree_style');
}
add_action( 'init','your_css_and_js');

