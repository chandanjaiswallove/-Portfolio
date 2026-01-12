<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property Card_Model $Card
 * @property Contact_Model $Contact
 */
class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Card_Model', 'Card');
		// $this->load->model('Contact_Model', 'Contact');

	}

	public function index()
	{
		$data['card'] = $this->Card->get_card();
		$this->load->view('welcome_message', $data);
	}


    public function modeLsave_contactVisitor()      /// Contact Model Function
    {
        $this->load->model('Contact_Model');
        $this->Contact_Model->save_contactVisitor();
    }
}
