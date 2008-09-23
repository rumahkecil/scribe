<?php

class Tag_model extends Model {
	
	function __construct() {
		parent::Model();
	}
	
	function getTagsById( $id ) {
		$query = $this->db->get_where('tags', array('id' => $id));
		
		return $query->result();
	}
	
	function getTags( $num = 0) {
		if($num == 0) {
			$query = $this->db->get('tags');
		} else {
			$query = $this->db->get('tags', $num);
		}
		
		return $query->result();
	}
	
	/* We need to use join to select posts within a certain tag. Much simpler, I hope. :P */
	
}