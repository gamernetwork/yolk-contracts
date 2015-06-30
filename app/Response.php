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

interface Response {

	const MSG_DANGER  = 'danger';
	const MSG_WARNING = 'warning';
	const MSG_SUCCESS = 'success';
	const MSG_INFO    = 'info';

	/**
	 * Return the character set of the response.
	 * @return string
	 */
	public function getCharset();

	/**
	 * Set the character set of the response.
	 * @param string $charset
	 */
	public function setCharset( $charset );

	/**
	 * Determine if the response is a redirect - code 301, 302, 303, 307 or 308.
	 * @return boolean
	 */
	public function isRedirect();

	/**
	 * Sets or returns the HTTP status code and message of the response.
	 * @param string $code      new HTTP status code to set.
	 * @param string $message   new HTTP status message set.
	 * @return array|self
	 */
	public function status( $code = null, $message = '' );

	/**
	 * Sets or returns an HTTP header.
	 * @param string $name    name of the header to set or return the value of.
	 * @param string $value   new value for the header.
	 * @return array|string|self
	 */
	public function header( $name = null, $value = null );

	/**
	 * Sets or returns the response body.
	 * @param string|null $body   new response body to set.
	 * @return string|self
	 */
	public function body( $body = null );

	/**
	 * Sets or returns an HTTP cookie.
	 * @param string $name      name of the cookie to set or return details of.
	 * @param string $value     new value for the cookie.
	 * @param int    $expires   unix timestamp of when the cookie is valid until.
	 * @return array|string|self
	 */
	public function cookie( $name = null, $value = null, $expires = 0, $path = '/', $domain = '' );

	/**
	 * Specify a flash message to be included in the next request.
	 * Messages are send to the client as cookies that are included in the next request (usually a redirect).
	 * @param  string $text
	 * @param  string $type  one of the Response::MSG_* constants
	 * @param  string $title an optional title of the message
	 * @return self
	 */
	public function message( $text, $type = self::MSG_INFO, $title = '' );

	/**
	 * Sends the response to the client.
	 */
	public function send();

	/**
	 * Set the prefix to be used for redirects.
	 * @param string $prefix
	 * @return self
	 */
	public function setRedirectPrefix( $prefix );

	/**
	 * Shortcut method to redirect the client to another URL.
	 * Permanent redirects use a 301 status code, temporary redirects use 303.
	 * The $prefix parameter specifies whether the value of $this->redirect_prefix
	 * should be prepended to the url if not already present.
	 * @param string $url
	 * @param bool   $permanent
	 * @param bool   $prefix
	 * @return self
	 */
	public function redirect( $url, $permanent = false, $prefix = null );

}

// EOF