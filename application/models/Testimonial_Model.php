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
        $profile_name = $this->input->post('profile_name', true);
        $company_name = $this->input->post('company_name', true);
        $client_project_name = $this->input->post('client_project_name', true);
        $client_review = $this->input->post('client_review', true);

        // ================= IMAGE DEFAULT =================
        $profile_photo = null;

        // ================= UPLOAD CONFIG =================
        if (!empty($_FILES['profile_photo']['name'])) {

            $upload_path = 'uploads/testimonials/';
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0755, true);
            }

            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size'] = 5120; // 5MB
            $config['encrypt_name'] = TRUE;

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

            $uploadData = $this->upload->data();
            $profile_photo = 'uploads/testimonials/' . $uploadData['file_name'];
        }

        // ================= INSERT DATA =================
        $data = [
            'testimonial_date' => date('Y-m-d H:i:s'),
            'profile_name' => $profile_name,
            'profile_photo' => $profile_photo,
            'company_name' => $company_name,
            'client_project_name' => $client_project_name,
            'client_review' => $client_review
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


    ////    edit and fetch /////
public function update_Testimonials()
{
    $id = $this->input->post('testimonial_id', true);

    if (empty($id)) {
        sweetAlert('Error', 'Invalid Testimonial ID', 'error', 'testimonials');
        return;
    }

    // ================= FORM DATA =================
    $data = [
        'profile_name'        => $this->input->post('profile_name', true),
        'company_name'        => $this->input->post('company_name', true),
        'client_project_name' => $this->input->post('client_project_name', true),
        'client_review'       => $this->input->post('client_review', true),
    ];

    // ================= GET OLD IMAGE =================
    $oldRow = $this->db->get_where('testimonial_directory', ['id' => $id])->row();
    $oldImage = $oldRow->profile_photo ?? null;

    // ================= CASE 1: IMAGE REMOVED (×) =================
    if ($this->input->post('remove_image') == '1') {
        if (!empty($oldImage) && file_exists(FCPATH . $oldImage)) {
            unlink(FCPATH . $oldImage);
        }
        $data['profile_photo'] = null;
    }

    // ================= CASE 2: NEW IMAGE UPLOADED =================
    if (!empty($_FILES['profile_photo']['name'])) {

        $upload_path = 'uploads/testimonials/';
        if (!is_dir($upload_path)) mkdir($upload_path, 0755, true);

        $config = [
            'upload_path'   => $upload_path,
            'allowed_types' => 'jpg|jpeg|png|webp',
            'max_size'      => 5120,
            'encrypt_name'  => TRUE
        ];

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('profile_photo')) {
            sweetAlert('Upload Failed', strip_tags($this->upload->display_errors()), 'error', 'testimonials');
            return;
        }

        $uploadData = $this->upload->data();
        $data['profile_photo'] = $upload_path . $uploadData['file_name'];

        // Delete old image only if it exists and remove_image wasn't set
        if (!empty($oldImage) && $this->input->post('remove_image') != '1' && file_exists(FCPATH . $oldImage)) {
            unlink(FCPATH . $oldImage);
        }
    }

    // ================= UPDATE QUERY =================
    $this->db->where('id', $id);
    if ($this->db->update('testimonial_directory', $data)) {
        sweetAlert('Success', 'Testimonial updated successfully', 'success', 'testimonials');
    } else {
        sweetAlert('Error', 'Testimonial update failed', 'error', 'testimonials');
    }
}




    //// Testimonials Company Logo Insert ////////

    public function uploadCompanyLogoImage()
    {
        $logoImagePath = null;

        if (!empty($_FILES['company_logo']['name'])) {

            $logoUploadDirectory = FCPATH . 'uploads/testimonials/';

            if (!is_dir($logoUploadDirectory)) {
                mkdir($logoUploadDirectory, 0755, true);
            }

            $uploadSettings = [
                'upload_path'   => $logoUploadDirectory,
                'allowed_types' => 'jpg|jpeg|png|webp',
                'max_size'      => 5120,
                'encrypt_name'  => TRUE
            ];

            $this->load->library('upload', $uploadSettings);
            $this->upload->initialize($uploadSettings, TRUE);

            if (!$this->upload->do_upload('company_logo')) {

                sweetAlert(
                    'Upload Failed',
                    $this->upload->display_errors('', ''),
                    'error',
                    'testimonials'
                );
                return;
            }

            // Upload successful
            $uploadedFileData = $this->upload->data();

            // Relative path for DB
            $logoImagePath = 'uploads/testimonials/' . $uploadedFileData['file_name'];

            // ================= DB INSERT =================
            $insertData = [
                'company_logo' => $logoImagePath,
                'date'         => date('Y-m-d H:i:s')
            ];

            $this->db->insert('company_logo_directory', $insertData);
            // =============================================

            sweetAlert(
                'Success',
                'Company logo uploaded successfully',
                'success',
                'testimonials'
            );
            return;
        }

        sweetAlert(
            'Error',
            'No image selected',
            'error',
            'testimonials'
        );
    }



}