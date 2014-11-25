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
 * Simple profiler class for recording code execution time, memory usage and database queries.
 */
interface ProfilerInterface {

	/**
	 * Create a new profiler instance.
	 * @param float|null   $time   start time (microtime)
	 * @param integer|null $memory start memory usage
	 */
	public function __construct( $time = null, $memory = null );

	/**
	 * Reset the specified timer.
	 * @param float|null   $time   start time (microtime)
	 * @param integer|null $memory start memory usage
	 */
	public function reset( $time = null, $memory = null );

	/**
	 * (Re)Start the specified timer.
	 * @param  string      $timer the name of the timer
	 * @param  boolean     $reset whether to reset the timer
	 * @param  float|null  $time  the start time of the timer (microtime)
	 * @return self
	 */
	public function start( $timer, $reset = false, $time = null );

	/**
	 * Stop the specified timer.
	 * If no timer is specified then all timers will be stopped.
	 * @param  string|null      $timer the name of the timer
	 * @return self
	 */
	public function stop( $timer = null );

	/**
	 * Determine if the specified timer is currently running.
	 * @param  string  $timer
	 * @return boolean
	 */
	public function isRunning( $timer = '' );

	/**
	 * Return the elapsed time of the specified timer.
	 * @param  string $timer
	 * @return self
	 */
	public function getElapsed( $timer = '' );

	/**
	 * Mark the current point in time with a label.
	 * @param  string $name unique name used to label the mark.
	 * @return self
	 */
	public function mark( $name = '' );

	/**
	 * Record a database query.
	 * @param  string $query      the query string used
	 * @param  array $parameters  parameters passed into the query string
	 * @param  float $duration    time taken to execute the query (microtime)
	 * @return self
	 */
	public function query( $query, $parameters, $duration );

	/**
	 * Add/remove a key/value pair to the profiler.
	 * @param  string $key
	 * @param  mixed $value if null, the key is removed
	 * @return self
	 */
	public function meta( $key, $value );

	/**
	 * Return the query information that have been recorded.
	 * @return array
	 */
	public function getQueries();

	/**
	 * Return all the data recorded by the profiler.
	 * @return array
	 */
	public function getData();

	/**
	 * Return HTML required to show the profiler.
	 * @return string
	 */
	public function getHTML();

}

// EOF