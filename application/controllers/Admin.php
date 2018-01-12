<?php
    class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct();
            
            $this->load->model('barang');
        }

        // Login
        public function login() {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() == TRUE){
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $this->db->select('*');
                $this->db->from('admin');
                /* @var $username type */
                $this->db->where(array('username' => $username, 'password' => $password));
                $query = $this->db->get();
                
                $admin = $query->row();
                if($admin->id_admin){
                    $this->session->set_flashdata("success", "You are Login");
                
                    $_SESSION['admin_logged'] = TRUE;
                    $_SESSION['admin_id'] = $admin->id_admin;
                    
                    redirect("admin/dashboard", "refresh");
                }else{
                    $this->session->set_flashdata("error", "No Such Account exist in database");
                    redirect("admin/login", "refresh");
                }
                
            }

            $this->load->view('admin/login');
        }
        // Dashboard
        public function dashboard() {
            if(!$_SESSION['admin_logged']){
                $this->session->set_flashdata("error", "Harus login terlebih dahulu");
                redirect("admin/login", "refresh");
            }
            
            $this->load->view('admin/dashboard');            
        }
        // Logout
        public function logout() {
            $_SESSION['admin_logged'] = FALSE;

            redirect('admin/login');
        }
        // Customer 
        public function customer() {
            $this->load->model('m_crud');
            $data['customer'] = $this->m_crud->view('customer')->result();

            $this->load->view('admin/customer', $data);
        }
        // Shoes
        public function shoes() {
            $this->load->model('m_crud');
            $data['barang'] = $this->m_crud->view('barang')->result();

            $this->load->view('admin/shoes', $data);
        }
        // Admin
        public function admin_toko() {
            $this->load->model('m_crud');
            $data['admin'] = $this->m_crud->view('admin')->result();

            $this->load->view('admin/admin_toko', $data);
        }
        // Nota
        public function nota() {
            $this->load->model('m_crud');
            $data['nota'] = $this->m_crud->view('nota')->result();

            $this->load->view('admin/nota', $data);
        }
        // Tambah barang
        public function tambah_barang() {
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
        
            $this->load->library('upload', $config);

            $this->load->model('m_crud');
            
            $nama = $this->input->post('nama');
            $kategori = $this->input->post('kategori');
            $kuantitas = $this->input->post('kuantitas');
            $keterangan = $this->input->post('keterangan');
            $harga = $this->input->post('harga');

            if($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
                
                $data = array(
                    'kategori_barang' => $kategori,
                    'nama_barang' => $nama,
                    'kuantitas_barang' => $kuantitas,
                    'keterangan' => $keterangan,
                    'harga_barang' => $harga,
                    'gambar' => $gambar
                );

                $this->m_crud->input($data, 'barang');
                redirect('admin/shoes');
            }
        }
        // Edit Shoes
        public function edit_shoes($id) {
            $this->load->model('m_crud');

            $where = array('id_barang' => $id);
            $data['barang'] = $this->m_crud->edit($where, 'barang')->result();
            $this->load->view('admin/edit_shoes', $data);
        }
        // Edit Shoes Action
        public function edit_shoes_action() {
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;
        
            $this->load->library('upload', $config);

            $this->load->model('m_crud');
            
            $id = $this->input->post('id_barang');
            $nama = $this->input->post('nama');
            $kategori = $this->input->post('kategori');
            $kuantitas = $this->input->post('kuantitas');
            $keterangan = $this->input->post('keterangan');
            $harga = $this->input->post('harga');

            if($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data('file_name');
                
                $data = array(
                    'kategori_barang' => $kategori,
                    'nama_barang' => $nama,
                    'kuantitas_barang' => $kuantitas,
                    'keterangan' => $keterangan,
                    'harga_barang' => $harga,
                    'gambar' => $gambar
                );

                $where = array(
                    'id_barang' => $id
                );
            } else {
                $data = array(
                    'kategori_barang' => $kategori,
                    'nama_barang' => $nama,
                    'kuantitas_barang' => $kuantitas,
                    'keterangan' => $keterangan,
                    'harga_barang' => $harga
                );

                $where = array(
                    'id_barang' => $id
                );
            }

            $this->m_crud->update($where, $data, 'barang');
            redirect('admin/shoes');
        }
        // Delete Shoes
        public function delete_shoes($id) {
            $this->load->model('m_crud');

            $where = array('id_barang' => $id);
			$this->m_crud->delete($where, 'barang');
			redirect('admin/shoes');
        }
        // Tambah admin
        public function tambah_admin_toko() {
            $this->load->model('m_crud');            
            
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            

            $data = array(
                'email' => $email,
                'username' => $username,
                'password' => $password,
            );

            $this->m_crud->input($data, 'admin');
            redirect('admin/admin_toko');
        }
        // Edit Admin
        public function edit_admin_toko($id) {
            $this->load->model('m_crud');

            $where = array('id_admin' => $id);
            $data['admin'] = $this->m_crud->edit($where, 'admin')->result();
            $this->load->view('admin/edit_admin_toko', $data);
        }
        // Edit Admin Action
        public function edit_admin_toko_action() {
            $this->load->model('m_crud');

            $id = $this->input->post('id_admin');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $data = array(
                'email' => $email,
                'username' => $username,
                'password' => $password,
            );

            $where = array('id_admin' => $id);

            $this->m_crud->update($where, $data, 'admin');
			redirect('admin/admin_toko');
        }
        // Delete Admin
        public function delete_admin_toko($id) {
            $this->load->model('m_crud');

            $where = array('id_admin' => $id);
			$this->m_crud->delete($where, 'admin');
			redirect('admin/admin_toko');
        }
        // Edit Status Customer
        public function update_status_action($id, $status) {
            $this->load->model('m_crud');
            if($status == 1){
                $data = array(
                    'id_customer' => $id,
                    'status' => 0,
                );
            }else{
                $data = array(
                    'id_customer' => $id,
                    'status' => 1,
                );
            }

            $where = array('id_customer' => $id);

            $this->m_crud->update($where, $data, 'customer');
			redirect('admin/customer');
        }
        // Edit Status Nota
        public function update_status_nota_action($id, $status) {
            $this->load->model('m_crud');
            if($status == 0){
                $data = array(
                    'id_nota' => $id,
                    'status' => 1,
                );
            }else{
                $data = array(
                    'id_nota' => $id,
                    'status' => 0,
                );
            }
            
            $where = array('id_nota' => $id);

            $this->m_crud->update($where, $data, 'nota');
			redirect('admin/nota');
        }
    }