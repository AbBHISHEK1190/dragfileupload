<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fileupload_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'files'; 

    }
    function insert($data)
    {
        $lastinsertid = $this->db->insert($this->table, $data); 
        print_r($lastinsertid,1);
    }
}