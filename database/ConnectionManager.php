<?php
/*
 * This file is part of Yolk - Gamer Network's PHP Framework.
 *
 * Copyright (c) 2014 Gamer Network Ltd.
 * 
 * Distributed under the MIT License, a copy of which is available in the
 * LICENSE file that was bundled with this package, or online at:
 * https://github.com/gamernetwork/yolk-contracts
 */

namespace yolk\contracts\database;

interface ConnectionManager {

	/**
	 * Add a new connection to the manager.
	 * If an instance of DSN is specified a suitable connection object will be created automatically.
	 * @param string $name
	 * @param DatabaseConnection|DSN $connection an instance of DatabaseConnection or DSN
	 * @return DatabaseConnection
	 */
	public function add( $name, $connection );

	/**
	 * Remove a connection from the manager. This doesn't not necessarily disconnect the connection.
	 * @param  string $name
	 * @return $this
	 */
	public function remove( $name );

	/**
	 * Return the specified connection.
	 * @param  string $name
	 * @return DatabaseConnection
	 */
	public function get( $name );

	/**
	 * Determine if the manager is aware of a connection with the specified name.
	 * @param  string  $name
	 * @return boolean
	 */
	public function has( $name );

	/**
	 * Return the default connection.
	 * @return DatabaseConnection
	 */
	public function getDefault();

	/**
	 * Specify the default connection.
	 * @param string $name name of the connection.
	 */
	public function setDefault( $name );

}

// EOF