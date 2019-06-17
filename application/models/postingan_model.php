<?php
    class postingan_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_post($slug = FALSE)
        {
            if($slug === false)
            {
                $this->db->order_by('tanggal', 'desc');
                $kueri = $this->db->get('post');
                
                return $kueri->result_array();
            }

            $kueri = $this->db->get_where('post', array('slug' => $slug));

            $hasil = $kueri->row_array();
            return $hasil;
        }

        public function buat_post($data) {
            $this->db->insert('post', $data);
        }

        public function hapus_post($id)
        {
            $this->db->where('postid', $id);
            $this->db->delete('post');
            return true;
        }

        public function update_post($data)
        {
            $id = $this->input->post('postid');

            $this->db->where('postid', $id);
            $this->db->update('post', $data);
        }
    }