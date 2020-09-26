<?php

class Pagination_models extends CI_Model
{
    public function AmbilSemuaBuku()
    {
        return $this->db->get('register')->result_array();
    }

    public function getBuku($limit, $start, $pencarian = null)
    {
        // coding dibawah ini untuk jika ada yang mau dicari
        if ($pencarian) {
            // masuk ke dalam query pencarian dan apapun yang di ketikan oleh user di kolom pencarian dan pencarian nya berdasarkan name atau bisa yang lain
            $this->db->like('nama', $pencarian);
        }
        return $this->db->get('register', $limit, $start)->result_array();
    }

    public function hitungSemuaData()
    {
        return $this->db->get('register')->num_rows();
    }
}
