<?php
class Blog_model extends CI_Model
{
    public function getAllBuku()
    {
        return $this->db->get('tb_buku')->result_array();
    }

    public function getBuku($limit, $start, $pencarian = null)
    {
        // coding dibawah ini untuk jika ada yang mau dicari
        if ($pencarian) {
            // masuk ke dalam query pencarian dan apapun yang di ketikan oleh user di kolom pencarian dan pencarian nya berdasarkan name atau bisa yang lain
            $this->db->like('judul', $pencarian);
        }
        return $this->db->get('tb_buku', $limit, $start)->result_array();
    }
    public function HitungSemuaBuku()
    {
        return $this->db->get('tb_buku')->num_rows();
    }
    public function getAll()
    {
        return $this->db->get('tb_buku');
    }
}
