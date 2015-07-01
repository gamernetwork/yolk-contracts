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

namespace yolk\contracts\support;

/**
 * Interface to indicate an object instance can be executed in a 
 */
interface Runnable {

	/**
	 * Run the command.
	 * @return mixed
	 */
	public function run();

}

// EOF