<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }



    ///// Testimonail Insert ///////////
  public function insertTestimonial()
{
    // ================= FORM DATA =================
    $profile_name         = $this->input->post('profile_name', true);
    $company_name         = $this->input->post('company_name', true);
    $client_project_name  = $this->input->post('client_project_name', true);
    $client_review        = $this->input->post('client_review', true);

    // ================= IMAGE DEFAULT =================
    $profile_photo = null;

    // ================= UPLOAD CONFIG =================
    if (!empty($_FILES['profile_photo']['name'])) {

        $upload_path = 'uploads/testimonials/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0755, true);
        }

        $config['upload_path']   = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size']      = 5120; // 5MB
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('profile_photo')) {
            sweetAlert(
                'Upload Failed',
                strip_tags($this->upload->display_errors()),
                'error',
                'testimonials'
            );
            return;
        }

        $uploadData   = $this->upload->data();
        $profile_photo = 'uploads/testimonials/' . $uploadData['file_name'];
    }

    // ================= INSERT DATA =================
    $data = [
        'testimonial_date'     => date('Y-m-d H:i:s'),
        'profile_name'         => $profile_name,
        'profile_photo'        => $profile_photo,
        'company_name'         => $company_name,
        'client_project_name'  => $client_project_name,
        'client_review'        => $client_review
    ];

    // ================= DB INSERT =================
    if ($this->db->insert('testimonial_directory', $data)) {

        sweetAlert(
            'Success',
            'Testimonial added successfully',
            'success',
            'testimonials'
        );

    } else {

        // image cleanup if DB failed
        if ($profile_photo && file_exists(FCPATH . $profile_photo)) {
            unlink(FCPATH . $profile_photo);
        }

        sweetAlert(
            'Error',
            'Testimonial insert failed',
            'error',
            'testimonials'
        );
    }
}



}