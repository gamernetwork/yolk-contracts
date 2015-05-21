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
 * A collection of items accessed by a unique key.
 */
interface Dictionary extends Collection {

	/**
	 * Determines if the specified item is in the dictionary.
	 * @param  mixed $item
	 * @return boolean
	 */
	public function has( $key );

	/**
	 * Determines if the specified item is in the dictionary.
	 * @param  mixed $item
	 * @return boolean
	 */
	public function get( $key );

	/**
	 * Add a new item to the dictionary.
	 * @param mixed $item
	 * @return mixed   the existing item assigned to key, or null if key doesn't exist
	 */
	public function add( $key, $item );

	/**
	 * Remove the specified item from the dictionary.
	 * @param  mixed $key
	 * @return mixed   the item associated with key, or null if key doesn't exist
	 */
	public function remove( $key );

	/**
	 * Return the keys contained in the dictionary.
	 * @return array
	 */
	public function keys();

}

// EOF