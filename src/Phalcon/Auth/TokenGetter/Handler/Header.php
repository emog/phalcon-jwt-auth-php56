<?php

namespace EmoG\Phalcon\Auth\TokenGetter\Handler;

use EmoG\Phalcon\Auth\TokenGetter\Handler\Adapter;

/**
 * EmoG\Phalcon\Auth\TokenGetter\Handle\Header.
 */
class Header extends Adapter {
	// header key
	protected $key = 'Authorization';

	// header value prefix
	protected $prefix = 'Bearer';


	/**
	 * Gets the token from the headers
	 *
	 * @return string
	 */
	public function parse() {
		$raw_token = $this->_Request->getHeader( $this->key );

		if ( ! $raw_token ) {
			return '';
		}

		return trim( str_ireplace( $this->prefix, '', $raw_token ) );
	}

	/**
	 * Sets the header value prefix
	 *
	 */
	public function setPrefix( $prefix ) {
		$this->prefix = $prefix;
	}
}