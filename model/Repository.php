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

use yolk\contracts\support\collections\Set;

/**
 * Repositories act as in-memory collections of entities.
 */
interface Repository extends Set {

	/**
	 * Return the name of the entity handled by the repository.
	 * @return string
	 */
	public function getEntity();

	/**
	 * Find the entity with the specified id.
	 *
	 * @param   mixed   $id
	 * @return  Entity|false
	 */
	public function findById( $id );

	/**
	 * Return an array of entities whose $property has value $value, with optional ordering, offset and limit.
	 * @param  string  $property  the property to test
	 * @param  mixed   $value     the value matching properties should have
	 * @param  string  $order
	 * @param  integer $limit
	 * @param  integer $offset
	 * @return array
	 */
	public function findBy( $property, $value, $order = null, $limit = 0, $offset = 0 );

	/**
	 * Find the first entity whose $property has value $value, with optional ordering.
	 * @param  string $property the property to test
	 * @param  mixed  $value    the value the matching property should have
	 * @param  string $order
	 * @return Entity|false
	 */
	public function findFirstBy( $property, $value, $order = null );

}

// EOF