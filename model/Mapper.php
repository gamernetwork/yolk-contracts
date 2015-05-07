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

namespace yolk\contracts\model;

use yolk\contracts\support\Filter;

/**
 * Mapper handles mapping entities to and from an underlying datastore.
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
	public function count( Filter $filter = null );

	/**
	 * Finds a set of items matching the specified filter.
	 * @param Filter  $filter  criteria used to filter the items.
	 * @param boolean $fetch   whether to return the item ids or complete entities.
	 * @return Mappable[]|integer[]
	 */
	public function find( Filter $filter, $fetch = true );

	/**
	 * Finds a set of items matching the specified filter.
	 * @param Filter  $filter  criteria used to filter the items.
	 * @param boolean $fetch   whether to return the item ids or complete entities.
	 * @return Mappable[]
	 */
	public function fetch( array $ids );

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