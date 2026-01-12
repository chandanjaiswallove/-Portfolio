<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save_contactVisitor()
    {
        $data = array(
            'visitor_fullname' => $this->input->post('full_name', TRUE),
            'visitor_email'    => $this->input->post('email', TRUE),
            'visitor_phone'    => $this->input->post('phone_number', TRUE),
            'visitor_subject'  => $this->input->post('subject', TRUE),
            'visitor_message'  => $this->input->post('message', TRUE),
            'contact_date'     => date('Y-m-d H:i:s')
        );

        if ($this->db->insert('contact_directory', $data)) {

            sweetAlert(
                'Success',
                'Your message has been sent successfully',
                'success',
                base_url()
            );

        } else {

            sweetAlert(
                'Error',
                'Something went wrong',
                'error',
                base_url()
            );
        }
    }
}
