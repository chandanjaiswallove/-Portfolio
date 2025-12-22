<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extra extends CI_Controller
{
    public function loaDextra()
    {
        $this->load->view('fronted/pages/extra');
    }
}
