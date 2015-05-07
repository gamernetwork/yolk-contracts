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

interface Mappable {

	/**
	 * Returns the Fieldset containing the properties and rules for the mappable object.
	 * Providing this as a static method enables us to extract the property definitions of an
	 * object without having to actually create an instance of it.
	 * @return \yolk\support\Fieldset
	 */
	public static function getProperties();

	/**
	 * Insert/set data into the mappable object.
	 * @return void
	 */
	public function setData( array $data );

	/**
	 * Return the data from the mappable object - optionally only the data that has changed.			
	 * @param  boolean $changed_only   if true only the data that has changed will be returned.
	 * @return void
	 */
	public function getData( $changed_only = true );

}

// EOF