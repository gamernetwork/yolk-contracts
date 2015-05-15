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

namespace yolk\contracts\model;

interface EntityMap {

	/**
	 * Return the class name of the entity this is the map for.
	 * @return string
	 */
	public function getEntity();

	/**
	 * Return the table name the mappable object is stored in.
	 * @return string
	 */
	public function getTable();

	/**
	 * Translate a property name into a storage field/column name.
	 * @param  string $property   property to translate.
	 * @return string
	 */
	public function getColumnName( $property );

	/**
	 * Translate a property value into a storage specific format.
	 * @param  string   $property   property to get the value of.
	 * @param  mixed    $value      value to translate.
	 * @return mixed
	 */
	public function getColumnValue( $property, $value );

}

// EOF