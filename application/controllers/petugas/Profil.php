<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Profil extends MY_Controller
{
	
	public function __construct()
	{
		# code...
			parent::__construct();
	}
	public function index(){
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		/*jika status login Yes dan status admin tampilkan*/
		if (!empty($cek) && $stts=='petugas') {
			// layout profil
			$data['title']='My Profile';
            $data['pointer']="Profil";
            $data['classicon']="fa fa-user";
            $data['main_bread']="Profil Petugas";
            $data['sub_bread']="My Profile";
            $data['desc']="Petugas";

			$tmp['content']=$this->load->view('petugas/profil',$data, TRUE);
			$this->load->view('petugas/layout',$tmp);
		}
		else
			// jika status on bukan admin kembalikan ke login
		{
			header('location:'.base_url().'login/auth');
		}
	}
}