<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PortfolioProject_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


public function insertPortProj()
{
    // ---------- IMAGE UPLOAD CONFIG ----------
    $config['upload_path']   = 'uploads/portproject/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['max_size']      = 5120; // 5 MB
    $config['encrypt_name']  = true;

    $this->load->library('upload', $config);

    // ---------- IMAGE UPLOAD ----------
    if (!$this->upload->do_upload('full_project_image')) {

        sweetAlert(
            'Upload Failed',
            strip_tags($this->upload->display_errors()),
            'error',
            base_url('projects')
        );
        return;
    }

    $uploadData = $this->upload->data();
    $imagePath  = 'uploads/portproject/' . $uploadData['file_name'];

    // ---------- INSERT PROJECT ----------
    $projectData = [
        'project_title' => $this->input->post('project_title', true),
        'project_link'  => $this->input->post('project_link', true),
        'full_image'    => $imagePath,
        'created_at'    => date('Y-m-d H:i:s')
    ];

    $this->db->insert('portfolio_projects', $projectData);
    $projectId = $this->db->insert_id();

    // ---------- INSERT TAGS ----------
    $tags = $this->input->post('project_tags');

    if (!empty($tags)) {
        foreach ($tags as $tag) {
            if (trim($tag) !== '') {
                $this->db->insert('portfolio_tags', [
                    'project_id'   => $projectId,
                    'project_tags' => trim($tag),
                    'created_at'   => date('Y-m-d H:i:s')
                ]);
            }
        }
    }

    // ---------- SUCCESS ALERT ----------
    sweetAlert(
        'Success!',
        'Portfolio project added successfully',
        'success',
        base_url('projects')
    );
}





    public function portfolioProjectRemove() ///  portfolioProjectRemove delte function here for    /// portfolio_tags and  portfolio_projects
    {
        $projectId = $_GET['id'];

        if ($this->db->query("DELETE FROM portfolio_projects WHERE id = '$projectId'")) {
            sweetAlert('Success', 'Delete Successfully', 'success', 'projects');
        } else {
            sweetAlert('Failed', 'Delte Failed try Again', 'error', 'projects');
        }
    }

}