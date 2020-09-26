<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Petugas extends MY_Controller
{

    public function construct()
    {
        session_start();
    }

    public function index()
    {
        $data['title']  = 'Petugas Perpustakaan';
        $tmp['content'] = $this->load->view('petugas/home', $data, true);
        $this->load->view('petugas/layout', $tmp);
    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
