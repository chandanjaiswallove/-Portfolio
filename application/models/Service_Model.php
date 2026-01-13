<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save_insert_service() 
    {
        // ================= FILE UPLOAD CONFIG =================
        $config['upload_path']   = 'uploads/services/';   // service images ka folder
        $config['allowed_types'] = 'jpg|jpeg|png|webp|svg';
        $config['max_size']      = 5120; // 5 MB
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);

        $service_icon = null;

        // ================= IMAGE UPLOAD =================
        if (!empty($_FILES['service_icon']['name'])) {
            if (!$this->upload->do_upload('service_icon')) {
                // ❌ Upload failed
                sweetAlert(
                    'Upload Failed',
                    strip_tags($this->upload->display_errors()),
                    'error',
                    'services'
                );
                return;
            }

            $uploadData = $this->upload->data();
            $service_icon = 'uploads/services/' . $uploadData['file_name'];
        }

        // ================= INSERT DATA =================
        $data = [
            'heading'        => $this->input->post('service_title', true),
            'description'    => $this->input->post('service_paragraph', true),
            'projects_count' => $this->input->post('service_project_count', true),
            'service_icon'   => $service_icon,
            'updated_date'   => date('Y-m-d H:i:s')
        ];

        // ================= DB INSERT =================
        if ($this->db->insert('services_directory', $data)) {
            // ✅ Success
            sweetAlert(
                'Success',
                'Service added successfully',
                'success',
                'services'
            );
        } else {
            // ❌ DB insert failed
            sweetAlert(
                'Error',
                'Database insert failed',
                'error',
                'services'
            );
        }
    }




    
}
