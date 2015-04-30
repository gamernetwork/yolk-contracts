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

interface FilterInterface {

	/**
	 * Get the filter criteria.
	 * @return array
	 */
	public function getCriteria();

	/**
	 * Get the maximum number of results allowed.
	 * @return integer
	 */
	public function getLimit();

	/**
	 * Get the offset into the filtered results to start
	 * @return integer
	 */
	public function getOffset();

	/**
	 * Get the fields to order the results by.
	 * @return array
	 */
	public function getOrder();

}

// EOF