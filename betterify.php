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

	/**
	 * Declare a few properties...
	 *
	 * @var
	 */
	public $power;
	public $seo;
	public $errors;

	/**
	 * Implement our betterifying functionality
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'errors' ) );
		add_action( 'wp_footer', array( $this, 'powerify' ) );
		add_filter( 'the_title', array( $this, 'titles' ) );
	}

	/**
	 * Define awful...
	 */
	public function is_awful() {
		$awful = array(
			'mushrooms',
			'Twilight',
			'Kid Rock',
			'frost bite',
			'reality television',
			'papercuts',
			'terrorists',
		);
		return apply_filters( 'betterify_awful_things', $awful );
	}

	/**
	 * We can't have awful titles can we?
	 *
	 * @param $title
	 * @param null $id
	 *
	 * @return string
	 */
	public function titles( $title, $id = null ) {
		if ( function_exists( $this->is_awful() ) ) {
			if ( $title == $this->is_awful() ) {
				return '';
			} else {
				return $title;
			}
		} else {
			return $title;
		}
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
		$moar = apply_filters( 'betterify_moar_power', 10000000000000 );
		$power = $this->power + $moar;

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

	/**
	 * Conflicts suck. Let's nullify them.
	 */
	public function conflicts() {
		$conflicts = 'bad';
		if ( $conflicts == 'bad' ) {
			$conflicts = null;
		} else {
			return;
		}
	}

	public function errors() {
		if ( $this->errors ) {
			$this->errors = null;
		}
	}
}

$betterify = new Betterify();
