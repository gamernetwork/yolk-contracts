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

namespace yolk\contracts\profiler;

/**
 * Simple timer implementation.
 */
interface Timer {

	/**
	 * Start the timer.
	 * @param  float $time optional starting point (microtime)
	 * @return self
	 */
	public function start( $time = null );

	/**
	 * Stop the timer and add the duration to the total elapsed time.
	 * @return self
	 */
	public function stop();

	/**
	 * Determine if the timer is currently running.
	 * @return boolean
	 */
	public function isRunning();

	/**
	 * Return the elapsed time from last start.
	 * @return float
	 */
	public function getElapsed( $total = false );

	/**
	 * Return the total elapsed time.
	 * @return float
	 */
	public function getTotalElapsed();

}

// EOF