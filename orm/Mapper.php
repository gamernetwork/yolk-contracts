<?php
/*
 * This file is part of Yolk - Gamer Network's PHP Framework.
 *
 * Copyright (c) 2013 Gamer Network Ltd.
 *
 * Distributed under the MIT License, a copy of which is available in the
 * LICENSE file that was bundled with this package, or online at:
 * https://github.com/gamernetwork/yolk-contracts
 */

namespace yolk\contracts\orm;

use yolk\contracts\support\Filter;

/**
 * Mappers handle mapping objects to and from an underlying datastore.
 */
interface Mapper {

	/**
	 * Return the mappable class handled by this mapper.
	 * @return string
	 */
	public function getMappable();

	/**
	 * Count the number of items matching the specified filter.
	 * @param Filter  $filter   criteria used to filter the items.
	 * @return integer
	 */
	public function count( Filter $filter );

	/**
	 * Finds a set of items matching the specified filter.
	 * @param Filter  $filter  criteria used to filter the items.
	 * @param boolean $fetch   whether to return the item ids or complete entities.
	 * @return Mappable[]|integer[]
	 */
	public function find( Filter $filter, $fetch = true );

	/**
	 * Fetch the set of items matching the specified ids.
	 * @param array $ids
	 * @return array
	 */
	public function fetch( array $ids );

	/**
	 * Determines if a mappable item breaks any unique constraints.
	 * @param  Mappable $mappable
	 * @return array   return an array of properties that break unique constraints
	 */
	public function exists( Mappable $mappable );

	/**
	 * Store a mappable object in the underlying datastore.
	 * @param  Mappable $mappable
	 * @return self
	 */
	public function store( Mappable $mappable );

	/**
	 * Delete a mappable object from the underlying datastore.
	 * @param  Mappable $mappable
	 * @return self
	 */
	public function delete( Mappable $mappable );

}

// EOF