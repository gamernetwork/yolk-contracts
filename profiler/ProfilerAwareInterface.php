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
 * Interface to indicate a class supports profiling.
 */
interface ProfilerAwareInterface {

	/**
	 * Inject a profiler object.
	 *
	 * @param   ProfilerInterface   $profiler
	 * @return  self
	 */
	public function setProfiler( ProfilerInterface $profiler = null );

}

// EOF