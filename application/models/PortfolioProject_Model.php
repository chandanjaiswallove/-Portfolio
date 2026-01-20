<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PortfolioProject_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function portfolioProjectRemove() ///  portfolioProjectRemove delte function here for    /// portfolio_tags and  portfolio_projects
    {
        $projectId = $_GET['id'];

        if ($this->db->query("DELETE FROM sss WHERE id = '$projectId'")) {
            sweetAlert('Success', 'Delete Successfully', 'success', 'projects');
        } else {
            sweetAlert('Failed', 'Delte Failed try Again', 'error', 'projects');
        }
    }

}