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

use yolk\contracts\support\Arrayable;

/**
 * Base collection interface.
 * Should not generally be implemented directly, instead use on of the more specific
 * sub-interfaces, such as Set or Dictionary.
 */
interface Collection extends \Traversable, \Countable {

	/**
	 * Determines if the collection is empty.
	 * @return boolean
	 */
	public function isEmpty();

	/**
	 * Remove all the items from the collection.
	 * @return self
	 */
	public function clear();

	/**
	 * Determines if the specified item is in the collection.
	 * @param  mixed $item
	 * @return boolean
	 */
	public function contains( $item );

}

// EOF