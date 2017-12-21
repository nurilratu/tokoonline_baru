<?php
    class Admin extends CI_Controller {
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
                if($admin->email){
                    $this->session->set_flashdata("success", "You are Login");
                
                    $_SESSION['admin_logged'] = TRUE;
                    $_SESSION['admin_username'] = $admin->username;
                    
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
        // customer 
        public function customer() {
            $this->load->view('admin/customer');
        }
        //shoes
        public function shoes() {
            

            $this->load->view('admin/shoes');
        }
        // nota
        public function nota() {
            $this->load->view('admin/nota');
        }
    }