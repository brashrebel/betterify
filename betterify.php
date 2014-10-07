<?php

/*
Plugin Name: Betterify
Plugin URI: http://github.com/brashrebel/betterify
Description: Making WordPress websites...better.
Version: 0.1
Author: Kyle Maurer
Author URI: http://kyleblog.net
License: GPL2
*/

class Betterify {

	public $power;
	public $seo;

	public function __construct() {
		add_action( 'wp_footer', array( $this, 'powerify' ) );
	}

    /**
     * Now we shall fix anything that is broken
     *
     * @return string
     */
	public function fix() {
		if ( function_exists( magically_fix_all_the_things() ) ) {
			return 'Everything is fixed';
		} else {
			// It is all broken
			$broken_stuff = 'broken';
			// Not any more!
			$broken_stuff = 'not broken!';
		}
	}

	/**
	 * At this point, we are making WordPress MOAR POWERFUL!
	 */
	public function powerify() {
		$this->power = 0;
		// MOAR POWER!
		$power = $this->power + 10000000000000;

		echo '<!-- THE POWER IS NOW ' . $power . '! -->';
	}

	/**
	 * Let's talk SEO!!!
	 *
	 * @return string
	 */
	public function googly() {
		return '???????';
	}

	/**
	 * Now let's optimize!
	 *
	 * @return string
	 */
	public function optimizify() {
		if ( $this->seo != $this->googly() ) {
			return 'You shall rank!';
		} else {
			return 'You shall not rank!';
		}
	}
}

$betterify = new Betterify();