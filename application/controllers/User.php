<?php
    class User extends CI_Controller {
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
                $this->db->from('customer');
                /* @var $username type */
                $this->db->where(array('username' => $username, 'password' => $password));
                $query = $this->db->get();
                
                $customer = $query->row();
                if($customer->id_customer){
                    $this->session->set_flashdata("success", "You are Login");
                
                    $_SESSION['customer_logged'] = TRUE;
                    $_SESSION['customer_id'] = $customer->id_customer;
                    
                    redirect("user/dashboard", "refresh");
                }else{
                    $this->session->set_flashdata("error", "No Such Account exist in database");
                    redirect("user/login", "refresh");
                }
                
            }

            $this->load->view('user/login');
        }
        // Dashboard
        public function dashboard() {
            if(!$_SESSION['customer_logged']){
                $this->session->set_flashdata("error", "Harus login terlebih dahulu");                
            }

            $this->load->view('user/dashboard');            
        }
        // Logout
        public function logout() {
            $_SESSION['customer_logged'] = FALSE;

            redirect('user/login');
        }
        //  Register
        public function register() {
            
            if (isset($_POST['register'])){
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                // $this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[5]matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('alamat', 'Alamat', 'required');
                // $this->form_validation->set_rules('no_telpon', 'No Telpon', 'required');
                if($this->form_validation->run() == TRUE){
                    echo 'form validated';
                    
                    $data = array(
                        'username'=>$_POST['username'],
                        'password'=>$_POST['password'],
                        'email'=>$_POST['email'],
                        'alamat'=>$_POST['alamat'],
                        'no_telp'=>$_POST['no_telp']
                    );
                    $this->db->insert('customer', $data);
                    
                    $this->session->set_flashdata("success", "Your account has been registered. You can login now");
                    redirect("user/register", "refresh");
                }
            }
            $this->load->view('user/register');
        }
        // Women
        public function women() {
            $where = array(
                'kategori_barang' => 'women'
            );

            $data['barang'] = $this->barang->get_per_kategori($where);

            $this->load->view('user/women', $data);
        }
        // Man
        public function man() {
            $where = array(
                'kategori_barang' => 'man'
            );

            $data['barang'] = $this->barang->get_per_kategori($where);

            $this->load->view('user/man', $data);
        }
        // Kids
        public function kids() {
            $where = array(
                'kategori_barang' => 'kids'
            );

            $data['barang'] = $this->barang->get_per_kategori($where);
    
            $this->load->view('user/kids', $data);
        }
        // sports
        public function sport() {
            $where = array(
                'kategori_barang' => 'sport'
            );

            $data['barang'] = $this->barang->get_per_kategori($where);

            $this->load->view('user/sport', $data);
        }
        // Detail
        public function detail($id) {
            $where = array(
                'id_barang' => $id
            );
            $data['barang'] = $this->barang->get_one('barang', $where)->row();

            $this->load->view('user/detail', $data);
        }
        // Contact
        public function contact() {
            $this->load->view('user/contact');
        }
        // Checkout
        public function checkout() {
            $where = array(
                'id_keranjang' => $_SESSION['customer_id']
            );

            $data['item'] = $this->db->get_where('item_keranjang', $where)->result();
            $data['jumlah_item'] = $this->db->get_where('item_keranjang', $where)->num_rows();
            $data['total_belanja'] = $this->db->select_sum('sub_total')->get_where('item_keranjang', $where)->row();

            $this->load->view('user/checkout', $data);
        }

        public function nota($id) {
            $where = array(
                'id_nota' => $id
            );

            $data['item'] = $this->db->get_where('item_nota', $where)->result();
            // foreach ($item as $item_nota)
            // echo $item_nota->nama;
            $data['jumlah_item'] = $this->db->get_where('item_nota', $where)->num_rows();
            // $jumlah_item;
            $data['total_belanja'] = $this->db->get_where('nota', $where)->row();
            // $total_belanja->total_pembelian;

            $this->load->view('user/nota', $data);
        }

        // Konfirmasi
        public function konfirmasi() {
            $this->load->view('user/konfirmasi');
        }
        // Pesanan sukses
        public function pesanansukses() {
            $this->load->view('user/pesanansukses');
        }

        public function checkout_confirm($id) {
            $id_nota = date("YmdHis");
            $tanggal = date("Y-m-d");
            $where = array(
                'id_keranjang' => $id
            );

            $total_pembelian = $this->db->query("SELECT SUM(sub_total) as total FROM item_keranjang WHERE id_keranjang='$id'")->row();
            $total_pembelian = $total_pembelian->total;

            $create_nota = $this->db->query("INSERT INTO nota (id_nota, tanggal_transaksi, total_pembelian, status) VALUES ('$id_nota', '$tanggal', '$total_pembelian', 0)");
            if ($create_nota) {
                $insert_item_nota = $this->db->query("INSERT INTO item_nota (id_nota, id_barang, total_barang, total_harga) SELECT $id, id_barang, total_barang, sub_total FROM item_keranjang WHERE id_keranjang='$id'");
                if ($insert_item_nota) {
                    $delete_item_keranjang = $this->db->query("DELETE FROM item_keranjang WHERE id_keranjang='$id'");
                    if ($delete_item_keranjang) {
                        redirect("user/nota/".$id_nota, "refresh");
                    }
                }
            }
        }
    }