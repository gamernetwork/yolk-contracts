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

namespace yolk\contracts\support;

interface Config extends collections\Dictionary {

	/**
	 * Loads and parses a configuration file.
	 * The file must define an array variable $config from which the data will be loaded.
	 * 
	 * @param string file   location of the configuration file.
	 * @return self
	 * @throws \LogicException if $config is not defined or not an array
	 */
	public function load( $file, $key = '' );

	/**
	 * Merge an array into the current configuration.
	 * @param  array  $data
	 * @return self
	 */
	public function merge( array $data );

}

// EOF