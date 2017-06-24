<?php

namespace EmoG\Phalcon\Auth\TokenGetter\Handler;

use Phalcon\Http\RequestInterface;
use EmoG\Phalcon\Auth\TokenGetter\AdapterInterface;

/**
 * EmoG\Phalcon\Auth\TokenGetter\Handler\Adapter.
 */
abstract class Adapter implements AdapterInterface
{

	// request object
	protected $_Request;

	// key for fetching JWT
	protected $key;

	/**
     * Sets request object.
     *
     * @param Phalcon\Http\RequestInterface $request
     */
	public function __construct(RequestInterface $request)
	{
		$this->_Request = $request;
	}

	/**
     * Sets the key for fetching
     *
     */
	public function setKey($key)
	{
		$this->key = $key;
	}
}