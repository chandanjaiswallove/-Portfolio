<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function skill_update()
    {
        // ================= FILE UPLOAD CONFIG =================
        $config['upload_path'] = 'uploads/skill/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp|svg';
        $config['max_size'] = 5120; // 5 MB
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);

        $skill_logo = null;

        // ================= IMAGE UPLOAD =================
        if (!empty($_FILES['skill_logo']['name'])) {

            if (!$this->upload->do_upload('skill_logo')) {

                sweetAlert(
                    'Upload Failed',
                    strip_tags($this->upload->display_errors()),
                    'error',
                    'my_skill'
                );
                return;
            }

            $uploadData = $this->upload->data();
            $skill_logo = 'uploads/skill/' . $uploadData['file_name'];
        }

        // ================= INSERT DATA =================
        $data = [
            'skill_name' => $this->input->post('skill_title', true),
            'skill_percentage' => $this->input->post('skill_progress', true),
            'skill_logo' => $skill_logo,
            'skill_updated_date' => date('Y-m-d H:i:s')
        ];

        // ================= DB INSERT =================
        if ($this->db->insert('myskill_directory', $data)) {

            sweetAlert(
                'Success',
                'Skill added successfully',
                'success',
                'my_skill'
            );

        } else {

            sweetAlert(
                'Error',
                'Database insert failed',
                'error',
                'my_skill'
            );
        }
    }
}
