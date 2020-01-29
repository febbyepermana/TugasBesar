<?php

class m_register extends CI_Model {
	public function register ()
	{
 	return $this->db->query("SELECT * from admin ");
 	}	
}