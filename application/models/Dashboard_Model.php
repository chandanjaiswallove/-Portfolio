<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model
{


    // ============================================================
    // ✅ get all data from introduce_directory 
    // ============================================================
    public function get_introduceData()
    {
        $query = $this->db
            ->order_by('id', 'DESC')   // latest record
            ->limit(1)                 // sirf ek
            ->get('introduce_directory');

        return $query->num_rows() ? $query->row() : null;
    }
}
