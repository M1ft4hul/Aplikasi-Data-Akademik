<?php
class Buku extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'LMS | Library Management System';
        $this->load->view('global/layout', $data);
    }

    public function data()
    {
        // manggil model
        $this->load->model('Blog_model', 'halaman');
        //pagination load library
        $this->load->library('pagination');


        // ambil data pencarian
        if ($this->input->post('submit')) {
            // apapun yang saya ketikan akan masuk dalam pencarion
            $data['pencarianbuku'] = $this->input->post('pencarianbuku');
            $this->session->set_userdata('pencarianbuku', $data['pencarianbuku']);
        } else {
            $data['pencarianbuku'] = $this->session->userdata('pencarianbuku');
        }




        // config pagination
        $config['base_url'] = 'http://localhost/perpus/buku/data';
        $this->db->like('judul', $data['pencarianbuku']);
        $this->db->from('tb_buku');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 3; // ini adalah jumlah data yang akan mau ditampilkan di halaman nya 

        // style pagination
        $config['full_tag_open'] = '<nav> <ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        // first link page
        $config['first_link'] = 'halaman pertama';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        //last link page
        $config['last_link'] = 'Halaman terakhir';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        // next link page
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        // pref link page
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        // cur active link
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        // cur doang
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        //atribute href link pagination
        $config['attributes'] = array('class' => 'page-link');

        // inisialisasi pagination berdasarkan confignya
        $this->pagination->initialize($config);


        // config halaman pagination
        $data['start'] = $this->uri->segment(3);
        $data['pages'] = $this->halaman->getBuku($config['per_page'], $data['start'], $data['pencarianbuku']);
        // manggil layout pagination header dan footer
        $data['title'] = "Pencarian Buku";
        $this->load->view('global/data', $data);
    }
}
