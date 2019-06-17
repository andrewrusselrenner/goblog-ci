<?php
    class Postingan extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Postingan Terakhir';
            $data['tulisan'] = $this->postingan_model->get_post();

            $this->load->view('template/kepala.php');
            $this->load->view('template/navbar.php');
            // $this->load->view('template/dada.php');
            
            $this->load->view('post/index', $data);
            
            $this->load->view('template/kaki.php');
        }

        public function lihat($slug = NULL)
        {
            $data['post'] = $this->postingan_model->get_post($slug);

            if (empty($data['post']))
            {
                show_404();
            }

            $this->load->view('template/kepala.php');
            $this->load->view('template/navbar.php');
            // $this->load->view('template/dada.php');
            
            $this->load->view('post/lihat', $data);
            
            $this->load->view('template/kaki.php');
        }

        public function buat()
        {
            $data['judulTab'] = 'Buat Postingan';

            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('isiartikel', 'isi', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('template/kepala.php', $data);
                $this->load->view('template/navbar.php');
                // $this->load->view('template/dada.php');
                
                $this->load->view('post/buat', $data);
                
                $this->load->view('template/kaki.php');
            } else {
                $slug = strtolower(url_title($this->input->post('judul')));

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'slug' => $slug,
                    'isi' => $this->input->post('isiartikel'),
                    'kategori' => $this->input->post('kategori'),
                    'author' => $this->input->post('author'),
                    'gambar' => $this->input->post('linkgambar')
                );

                $this->postingan_model->buat_post($data);
                redirect('post/'.$slug,'refresh');
            }
        }

        public function hapus($id)
        {
            $this->postingan_model->hapus_post($id);

            redirect('post','refresh');
        }

        public function edit($slug)
        {
            $data['post'] = $this->postingan_model->get_post($slug);

            if(empty($data['post']))
            {
                show_404();
            }

            $this->load->view('template/kepala.php', $data);
            $this->load->view('template/navbar.php');
            // $this->load->view('template/dada.php');
            
            $this->load->view('post/edit', $data);
            
            $this->load->view('template/kaki.php');
        }

        public function update()
        {
            $sluga = strtolower($this->input->post('judul'));
            $slug = url_title($sluga);

            $data = array(
                'judul' => $this->input->post('judul'),
                'slug' => $slug,
                'isi' => $this->input->post('isiartikel'),
                'kategori' => $this->input->post('kategori'),
                'author' => $this->input->post('author'),
                'gambar' => $this->input->post('linkgambar')
            );

            $this->postingan_model->update_post($data);
            
            redirect(base_url().'post/'.$slug,'refresh');

        }
    }