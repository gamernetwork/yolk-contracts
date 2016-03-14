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

class Error {
	
	const NONE      = false;
	const TEXT      = 'encoding';
	const INTEGER   = 'integer';
	const FLOAT     = 'float';
	const BOOLEAN   = 'boolean';
	const TIMESTAMP = 'timestamp';
	const DATETIME  = 'datetime';
	const DATE      = 'date';
	const YEAR      = 'year';
	const TIME      = 'time';
	const IP        = 'ip';
	const EMAIL     = 'email';
	const URL       = 'url';
	const JSON      = 'json';
	const REQUIRED  = 'required';
	const NULL      = 'null';
	const MIN       = 'min';
	const MAX       = 'max';
	const TOO_SHORT = 'too-short';
	const TOO_LONG  = 'too-long';
	const REGEX     = 'regex';
	const VALUE     = 'value';
	const EXISTS    = 'exists';

	/**
	 * Return the correct error constant for a specified type.
	 * @param  string $type   One of the constants from yolk\contracts\support\Type.
	 * @return string
	 */
	public static function getTypeError( $type ) {

		$data = [
			Type::TEXT      => static::TEXT,
			Type::INTEGER   => static::INTEGER,
			Type::FLOAT     => static::FLOAT,
			Type::BOOLEAN   => static::BOOLEAN,
			Type::TIMESTAMP => static::TIMESTAMP,
			Type::DATETIME  => static::DATETIME,
			Type::DATE      => static::DATE,
			Type::TIME      => static::TIME,
			Type::YEAR      => static::YEAR,
			Type::IP        => static::IP,
			Type::EMAIL     => static::EMAIL,
			Type::URL       => static::URL,
			Type::JSON      => static::JSON,
			Type::OBJECT    => static::VALUE,
			Type::ENTITY    => static::VALUE,
		];

		return isset($data[$type]) ? $data[$type] : static::VALUE;

	}

	private function __construct() {}

}

// EOF