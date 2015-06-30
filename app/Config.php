<?php
/*
 * This file is part of Yolk - Gamer Network's PHP Framework.
 *
 * Copyright (c) 2015 Gamer Network Ltd.
 * 
 * Distributed under the MIT License, a copy of which is available in the
 * LICENSE file that was bundled with this package, or online at:
 * https://github.com/gamernetwork/yolk-application
 */

namespace yolk\contracts\app;

interface Config {

	/**
	 * Loads and parses a configuration file.
	 * The file must define an array variable $config from which the data will be loaded.
	 * 
	 * @param string file   location of the configuration file.
	 * @return self
	 * @throws \yolk\app\Exception if $config is not defined or not an array
	 */
	public function load( $file );

	/**
	 * Determines if the specified key exists.
	 * 
	 * @param string key.
	 * @return boolean
	 */
	public function has( $key );

	/**
	 * Returns a specific item or branch of items.
	 * 
	 * @param string key       item to return.
	 * @param mixed  default   value returned if key doesn't exist in the configuration.
	 * @return mixed
	 */
	public function get( $key, $default = null );

	/**
	 * Assigns a new value to the specified key.
	 * 
	 * @param string key     item to set.
	 * @param mixed  value   new value.
	 * @return self
	 */
	public function set( $key, $value );

	/**
	 * Merge an array into the current configuration.
	 * @param  array  $config
	 * @return self
	 */
	public function merge( array $config );

}

// EOF