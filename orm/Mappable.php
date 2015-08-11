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

namespace yolk\contracts\orm;

interface Mappable {

	/**
	 * Insert/set data into the mappable object.
	 * @return self
	 */
	public function setData( array $data );

	/**
	 * Return the data from the mappable object - optionally only the data that has changed.			
	 * @param  boolean $changed_only   if true only the data that has changed will be returned.
	 * @return array
	 */
	public function getData( $changed_only = false );

}

// EOF