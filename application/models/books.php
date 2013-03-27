<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get("Books", 10);
        return $query->result();
    }

    public function get_dropdown() {
        $categories = $this->db->select('product_id, judul')
          ->order_by('judul', 'ASC')
          ->get('Books')
          ->result();

        $dropdown = array('' => 'Pilih Kategori');
        if( !empty($categories) ) {
            foreach( $categories as $c ) {
                $dropdown[$c->product_id] = $c->judul;
            }
            return $dropdown;
        }
        return array('' => 'Tidak ada kategori');
    }

}