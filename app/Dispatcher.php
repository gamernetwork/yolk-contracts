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

interface Dispatcher {

	/**
	 * Dispatches the specified request.
	 * @param $request
	 * @return  the response to the request
	 */
	public function dispatch( $request );

}

// EOF