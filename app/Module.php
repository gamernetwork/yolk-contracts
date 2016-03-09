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
 * A module is a re-usable micro application in Yolk, used for partitioning
 * functioanlity.
 * It can be delegated to for route dispatch and can declare it's own view
 * search path.
 */
interface Module extends Dispatcher {
	/**
	 * Return a view path for this module. The order is significant: views paths are searched
	 * forwards
	 *
	 * @return array An array of 'namespace' => 'path' pairs
	 */
	public function buildViewConfig();

}

// EOF
