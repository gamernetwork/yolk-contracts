<?php
/*
 * This file is part of Yolk - Gamer Network's PHP Framework.
 *
 * Copyright (c) 2015 Gamer Network Ltd.
 *
 * Distributed under the MIT License, a copy of which is available in the
 * LICENSE file that was bundled with this package, or online at:
 * https://github.com/gamernetwork/yolk-database
 */

namespace yolk\contracts\database;

interface Query {

	public function __toString();

	public function innerJoin( $table, array $on );

	public function leftJoin( $table, array $on );

	public function where( $column, $operator, $value = null );

	public function orderBy( $column, $ascending = true );

	public function offset( $offset );

	public function limit( $limit );

}

// EOF