<?php
/*
 * This file is part of Yolk - Gamer Network's PHP Framework.
 *
 * Copyright (c) 2015 Gamer Network Ltd.
 * 
 * Distributed under the MIT License, a copy of which is available in the
 * LICENSE file that was bundled with this package, or online at:
 * https://github.com/gamernetwork/yolk-orm
 */

namespace yolk\contracts\orm;

interface Entity extends Mappable {

	/**
	 * Returns the EntitySchema containing the properties and rules for the mappable object.
	 * Providing this as a static method enables us to extract the property definitions of an
	 * object without having to actually create an instance of it.
	 * @return EntitySchema
	 */
	public static function getSchema();

	/**
	 * Determines if the entity needs to be validated.
	 * @return boolean
	 */
	public function needsValidation();

	/**
	 * Determines if the entity is valid, i.e. has been validated and has no errors.
	 * @return boolean
	 */
	public function isValid();

	/**
	 * Validate the state of the entity.
	 * @return array an array of errors
	 */
	public function validate();


	public function getErrors();

	public function setError( $property, $error = false );

}

// EOF