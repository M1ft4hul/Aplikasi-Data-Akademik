<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login extends CI_Controller
{

    public function _construct()
    {
        session_start();
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('session');
    }
    // halaman layout
    public function index()
    {
        $data['title'] = 'LMS | Library Management System';
        $tmp['content'] = $this->load->view('global/layout', $data, true);
        $this->load->view('global/template_login', $tmp);
    }


    //     //halaman login
    //     public function log()
    //     {
    //         $cek = $this->session->userdata('logged_in');
    //         if (empty($cek)) {

    //             //buat atribut form
    //             $frm['username'] = array('name' => 'username',
    //                 'id' => 'username',
    //                 'type' => 'text',
    //                 'value' => '',
    //                 'class' => 'form-control',
    //                 'placeholder' => 'Username',
    //             );
    //             $frm['password'] = array('name' => 'password',
    //                 'id' => 'password',
    //                 'type' => 'password',
    //                 'value' => '',
    //                 'class' => 'form-control',
    //                 'placeholder' => 'Password',
    //             );

    //             $frm['title'] = 'LMS | Login';
    //             $tmp['content'] = $this->load->view('global/login', $frm);
    //             echo $this->session->set_flasdata("location: login.php?=gagal");


    //         } else {
    //             $st = $this->session->userdata('stts');
    //             echo $s = $this->session->userdata('username');
    //             if ($st == 'admin') {
    //                 header('location:' . base_url() . 'admin/Home');
    //             } else if ($st == 'petugas') {
    //                 header('location:' . base_url() . 'petugas/Home');
    //             }

    //         }
    //     }

    //     //mengambil data login
    //     public function login()
    //     {
    //         $u = $this->input->post('username');
    //         $p = $this->input->post('password');
    //         $this->Perpus_model->getLoginData($u, $p);

    // }

    //     //logout
    //     public function logout()
    //     {
    //         $cek = $this->session->userdata('logged_in');
    //         if (empty($cek)) {

    //             header('location:' . base_url() . 'web/log');
    //         } else {

    //             $this->session->sess_destroy();
    //             header('location:' . base_url() . 'web/log');

    //         }
    //     }
    // dibawa ini untuk login system yang multi user
    public function auth()
    {
        $username   = $this->input->post('username', TRUE);
        $password   = md5($this->input->post('password', TRUE));
        $validate   = $this->Login_model->validate($username, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $username  = $data['username'];
            $level = $data['stts'];
            $sesdata = array(
                'username'  => $username,
                'stts'      => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // script coding dibawah ini untuk multi user
            // access login for admin
            if ($level === 'admin') {
                redirect('admin/home');

                // access login for petugas
            } elseif ($level === 'petugas') {
                redirect('petugas/home');
            }
        } else {
            echo $this->session->set_flashdata('msg', 'username dan password yang anda inputkan salah');
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}


/* End of file web.php */
/* Location: ./application/controllers/web.php */
