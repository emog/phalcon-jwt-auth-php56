<?php

namespace EmoG\Phalcon\Auth\TokenGetter\Handler;

use EmoG\Phalcon\Auth\TokenGetter\Handler\Adapter;

/**
 * EmoG\Phalcon\Auth\TokenGetter\Handle\QueryStr.
 */
class QueryStr extends Adapter {
	// Query string key
	protected $key = 'token';

	/**
	 * Gets the token from the query strings
	 *
	 * @return string
	 */
	public function parse() {
		$q = $this->_Request->getQuery( $this->key );

		return trim( ( isset( $q ) ? $this->_Request->getQuery( $this->key ) : '' ) );
	}
}