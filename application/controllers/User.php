<?php
    class User extends CI_Controller {
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
            $this->load->view('user/women');
        }
        // Man
        public function man() {
            $this->load->view('user/man');
        }
        // Kids
        public function kids() {
            $this->load->view('user/kids');
        }
        // sports
        public function sport() {
            $this->load->view('user/sport');
        }
        // Detail
        public function detail() {
            $this->load->view('user/detail');
        }
        // Contact
        public function contact() {
            $this->load->view('user/contact');
        }
        // Checkout
        public function checkout() {
            $this->load->view('user/checkout');
        }
        // Konfirmasi
        public function konfirmasi() {
            $this->load->view('user/konfirmasi');
        }
        // Pesanan sukses
        public function pesanansukses() {
            $this->load->view('user/pesanansukses');
        }
    }