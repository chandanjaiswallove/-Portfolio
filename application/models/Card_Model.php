<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card_Model extends CI_Model
{
    public function get_card()
    {
        $query = $this->db
            ->order_by('id', 'DESC')   // latest record
            ->limit(1)                 // sirf ek
            ->get('card_directory');

        return $query->num_rows() ? $query->row() : null;
    }
}
