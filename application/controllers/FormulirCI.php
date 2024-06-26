<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FormulirCI extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Codeigniter : Write Less Do More
        // $this->load->model('Form'); // Hapus array, karena Anda hanya memuat satu model.
    }

    public function index() 
    {
        // Selanjutnya, Anda bisa memuat tampilan dengan data ini.
        // Misalnya:
        $this->load->view('containerView', ['content'=>'content/formView']);
    }

}