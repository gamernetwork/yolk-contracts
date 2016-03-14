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
 * A simple router interface.
 */
interface Router {

	/**
	 * Add a route.
	 * @param bool  $regex    regular expresion that is matched against a request URI.
	 * @param mixed $action   callback or closure associated with the route.
	 * @param mixed $extra    extra data to be supplied to action not encoded in query.
	 */
	public function addRoute( $regex, $action, $extra = [] );

	/**
	 * Return an array of defined routes.
	 * @return array
	 */
	public function getRoutes();

	/**
	 * Turn a controller action into a URL
	 * @param string $action      controller action spec (like JobsController/index)
	 * @param array  $args        positional arguments for url (e.g. job id) as strings
	 */
	public function reverse( $action, $args = [] );

	/**
	 * Determine if a route matches the specifies request.
	 * @param array  $route    the route to be tested
	 * @param string $uri      URI to be tested.
	 * @param string $method   HTTP method the URI request was made with.
	 */
	public function test( $route, $uri, $method );

}

// EOF