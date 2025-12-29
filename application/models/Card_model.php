<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card_model extends CI_Model
{

    public function get_card()
    {
        // Latest record fetch kar raha hai
        return $this->db
            ->order_by('id', 'DESC')   // latest card ko uthane ke liye
            ->limit(1)                 // sirf ek hi record chahiye
            ->get('card_directory')    // card_directory table se data
            ->row();                   // single row return
    }
}
