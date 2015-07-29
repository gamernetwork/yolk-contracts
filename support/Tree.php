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

interface Tree {

	public function countAncestors( $id );
	
	public function getAncestors( $id );
	
	public function countSiblings( $id );
	
	public function getSiblings( $id );
	
	public function countChildren( $id );
	
	public function getChildren( $id );
	
	public function countDescendants( $id );
	
	public function getDescendants( $id, $absolute_depth = false );
	
	public function insertNode( $id, $parent_id = 0 );
	
	public function removeNode( $id );
	
	public function moveNode( $id, $parent_id );
	
	public function getTree( $id, $max_depth = 0, $sort = false );
	
	public function rebuild( $sort = false );

}

// EOF