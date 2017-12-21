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
                $this->db->from('user');
                /* @var $username type */
                $this->db->where(array('username' => $username, 'password' => $password));
                $query = $this->db->get();
                
                $user = $query->row();
                if($user->email){
                    $this->session->set_flashdata("success", "You are Login");
                
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['username'] = $user->username;
                    
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
            if(!$_SESSION['user_logged']){
                $this->session->set_flashdata("error", "Harus login terlebih dahulu");                
            }

            $this->load->view('user/dashboard');            
        }
        // Logout
        public function logout() {
            $_SESSION['user_logged'] = FALSE;

            redirect('user/login');
        }
    

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
                    $this->db->insert('user', $data);
                    
                    $this->session->set_flashdata("success", "Your account has been registered. You can login now");
                    redirect("user/register", "refresh");
                }
            }
            $this->load->view('user/register');
        }
    }