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
 * Provides profiling capability to a class.
 */
trait ProfilerAwareTrait {

	/**
	 * Profiler instance.
	 * @var Profiler	 */
	protected $profiler;
	
	/**
	 * Inject a profiler object.
	 *
	 * @param   Profiler   $profiler
	 * @return  self
	 */
	public function setProfiler( Profiler $profiler = null ) {
		$this->profiler = $profiler;
		return $this;
	}

}

// EOF