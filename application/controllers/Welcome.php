<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Card_Model $Card
 */
class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Card_Model', 'Card');
	}

	public function index()
	{
		$data['card'] = $this->Card->get_card();
		$this->load->view('welcome_message', $data);
	}
}
