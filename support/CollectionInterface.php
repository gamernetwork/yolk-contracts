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
 * Basic collection interface.
 */
interface CollectionInterface extends Arrayable, Jsonable, \IteratorAggregate, \Countable {

	/**
	 * Return the number of items in the collection, optionally that match the specified filter.
	 * @param  FilterInterface|null $filter
	 * @return integer
	 */
	public function count( FilterInterface $filter = null );

	/**
	 * Return a new collection containing the items that match the specified filter.
	 * @param  FilterInterface $filter
	 * @return Collection
	 */
	public function find( FilterInterface $filter );

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

	/**
	 * Add a new item to the collection.
	 * @param mixed $item
	 * @return  self
	 */
	public function add( $item );

	/**
	 * Remove the specified item from the collection.
	 * @param  mixed $item
	 * @return this
	 */
	public function remove( $item );

	/**
	 * Remove the items that match the specified filter.
	 * @param  FilterInterface $filter
	 * @return this
	 */
	public function removeMany( FilterInterface $filter );

}

// EOF