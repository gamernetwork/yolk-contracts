<?php
/*
 * This file is part of Yolk - Gamer Network's PHP Framework.
 *
 * Copyright (c) 2014 Gamer Network Ltd.
 * 
 * Distributed under the MIT License, a copy of which is available in the
 * LICENSE file that was bundled with this package, or online at:
 * https://github.com/gamernetwork/yolk-contracts
 */

namespace yolk\contracts\log;

/**
 * Interface for logger factory class.
 */
interface LoggerFactoryInterface {

	/**
	 * Create a logger instance based on a configuration.
	 * @param  array|string $config
	 * @return LoggerInterface
	 */
	public function create( $config );

}

// EOF