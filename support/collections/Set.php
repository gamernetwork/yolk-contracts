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

namespace yolk\contracts\support\collections;

/**
 * A collection of unique items.
 */
interface Set extends Collection {

	/**
	 * Add a new item to the set.
	 * @param mixed $item
	 * @return boolean   true if item was added to the set, false if it already exists
	 */
	public function add( $item );

	/**
	 * Remove the specified item from the set.
	 * @param  mixed $item
	 * @return boolean   true if the item existed in the set.
	 */
	public function remove( $item );

}

// EOF