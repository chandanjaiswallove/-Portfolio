<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Card_model', 'Card'); // Model load + short alias
	}

	public function index()
	{
		$data['card'] = $this->Card->get_card(); // Model ka method call karke data fetch

		$this->load->view('welcome_message', $data); // View ko data ke saath bhej diya
	}
}

