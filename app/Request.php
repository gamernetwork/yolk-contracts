<?php
/*
 * This file is part of Yolk - Gamer Network's PHP Framework.
 *
 * Copyright (c) 2015 Gamer Network Ltd.
 * 
 * Distributed under the MIT License, a copy of which is available in the
 * LICENSE file that was bundled with this package, or online at:
 * https://github.com/gamernetwork/yolk-contracts
 */

namespace yolk\contracts\app;

/**
 * A request object to wrap PHP super globals into a consistent interface.
 */
interface Request {

	const METHOD_GET    = 'GET';
	const METHOD_POST   = 'POST';
	const METHOD_PUT    = 'PUT';
	const METHOD_DELETE = 'DELETE';

	/**
	 * Create a request object from the PHP's super global arrays.
	 * @return self
	 */
	public static function createFromGlobals();

	/**
	 * Sets the uri prefix being used.
	 * Used when an application is not being run at the root of a domain.
	 * @param [type] $prefix [description]
	 */
	public function setUriPrefix( $prefix );

	/**
	 * Returns the request method.
	 * @return string
	 */
	public function method();

	/**
	 * Returns the request URI minus any set prefix.
	 * @return string
	 */
	public function uri();

	/**
	 * Returns the full request URI.
	 * @return string
	 */
	public function fullURI();

	/**
	 * Returns the query string part of the uri
	 * @return string
	 */
	public function queryString();

	/**
	 * Returns the value of a request option.
	 * @param  string $key       key to return value of; if empty all options are returned.
	 * @param  mixed  $default   default value returned if key doesn't exist.
	 * @param  string $clean     is the value passed through the XSS filter.
	 * @return mixed
	 */
	public function option( $key = null, $default = null, $clean = true );

	/**
	 * Returns an item of data from the request.
	 * @param  string $key       key to return value of; if empty all data items are returned.
	 * @param  mixed  $default   default value returned if key doesn't exist.
	 * @param  string $clean     is the value passed through the XSS filter.
	 * @return mixed
	 */
	public function data( $key = null, $default = null, $clean = true );

	/**
	 * Returns the value of a request header.
	 * @param  string $name      name of the header to return value of.
	 * @param  mixed  $default   default value returned if header doesn't exist.
	 * @return mixed
	 */
	public function header( $name = null, $default = null );

	/**
	 * Returns the value of a request cookie.
	 * @param  string $name      name of the cookie to return value of.
	 * @param  mixed  $default   default value returned if cookie doesn't exist.
	 * @return mixed
	 */
	public function cookie( $name = null, $default = null );

	/**
	 * Returns a file upload item.
	 * @param  string $key       key to return item of.
	 * @return mixed
	 */
	public function file( $key = null, $default = null );

	/**
	 * Returns the value of a environment setting.
	 * @param  string $name      name of the cookie to return value of.
	 * @param  mixed  $default   default value returned if setting doesn't exist.
	 * @return mixed
	 */
	public function environment( $name = null, $default = null );

	/**
	 * Enables the request to store extra data - e.g. data provided by the route specification.
	 * @param  string $key     name of the extra data item to return
	 * @param  mixed  $default default value returned if extra item doesn't exist
	 * @return mixed
	 */
	public function extra( $key = null, $default = null );
	
	/**
	 * Return the flashes messages sent as part of the request.
	 * @return array
	 */
	public function messages();

	/**
	 * Return the IP address of the client, if available.
	 * @return string
	 */
	public function ip();
	
	/**
	 * Return the country the request originated from, if known.
	 * @param  string $default a default country to return if the origin is unknown.
	 * @return string a two-letter country code
	 */
	public function country( $default = 'GB' );

	/**
	 * Return the continent the request originated from, if known.
	 * @param  string $default a default continent to return if the origin is unknown.
	 * @return string a two-letter continent code
	 */
	public function continent( $default = 'EU' );

	/**
	 * Determine if the request was made by a bot.
	 * @return boolean
	 */
	public function isBot();

	/**
	 * Determine if the request was made via AJAX.
	 * @return boolean
	 */
	public function isAjax();

	/**
	 * Determine if the request was made over a secure connection.
	 * @return boolean
	 */
	public function isSecure();

	/**
	 * Determine if the request is a GET.
	 * @return boolean
	 */
	public function isGet();

	/**
	 * Determine if the request is a POST.
	 * @return boolean
	 */
	public function isPost();

	/**
	 * Determine if the request is a PUT.
	 * @return boolean
	 */
	public function isPut();

	/**
	 * Determine if the request is a DELETE.
	 * @return boolean
	 */
	public function isDelete();

}

// EOF