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

interface Middleware {

	/**
	 * @param Request                  $request  the request
	 * @param callable|Middleware|null $next     the next middleware
	 *
	 * @return Response
	 */
	public function __invoke( Request $request, callable $next = null );

}

// EOF