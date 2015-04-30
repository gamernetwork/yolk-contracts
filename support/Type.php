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

class Type {
	
	// numeric types
	const INTEGER    = 'integer';
	const FLOAT      = 'float';
	const BOOLEAN    = 'boolean';

	// temporal types
	const TIMESTAMP  = 'timestamp';
	const DATETIME   = 'datetime';
	const DATE       = 'date';
	const TIME       = 'time';
	const YEAR       = 'year';

	// text types
	const TEXT       = 'text';
	const IP         = 'ip';
	const EMAIL      = 'email';
	const URL        = 'url';

	// binary types
	const BINARY     = 'binary';

	// miscellaneous types
	const ENUM       = 'enum';
	const SET        = 'set';
	const JSON       = 'json';
	const CUSTOM     = 'custom';

	// related types
	const ENTITY     = 'entity';
	const COLLECTION = 'collection';

	private function __construct() {}

}

// EOF