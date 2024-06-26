<?php 
defined('BASEPATH') or exit ("No direct script access allowed");
class HistoryController extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('containerView', ['content'=>'content/history']);
    }
}


?>