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

	public function powerify() {
		$this->power = 0;
		// MOAR POWER!
		$power = $this->power + 10000000000000;

		echo '<!-- THE POWER IS NOW ' . $power . '! -->';
	}

	public function googly() {
		return '???????';
	}

	public function optimizify() {
		if ( $this->seo != $this->googly() ) {
			return 'You shall rank!';
		} else {
			return 'You shall not rank!';
		}
	}
}
$betterify = new Betterify();