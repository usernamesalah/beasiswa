<?php 

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['username']     = $this->session->userdata('username');
        $this->data['role']    = $this->session->userdata('role');
        if (isset($this->data['role'])) {
            switch ($this->data['role']) 
            {
            case 'admin':
                redirect('admin');
                break;
            case 'mahasiswa':
                redirect('mahasiswa');
                break;
            default:
                $this->session->sess_destroy();
                redirect('login');    
            }
        }
    }

    public function index()
    {
        // $this->load->library('Smart/smart');
        // $this->smart->fit(
        //     [
        //     'ipk' => 3.50,
        //     'prestasi_non_akademik' => 'Internasional',
        //     'penghasilan_orang_tua' => 1300000,
        //     'tanggungan_orang_tua' => 2
        //     ]
        // );
        // $this->dump($this->smart->result());
        // exit;

        $this->data['title']    = 'Login | ' . $this->title;
        $this->data['content']    = 'login';
        $this->load->view('login', $this->data);
    }

    public function login_process()
    {
        if ($this->POST('login-submit')) {
            $this->load->model('user_m');
            if (!$this->user_m->required_input(['username','password'])) {
                $this->flashmsg('Data harus lengkap', 'warning');
                redirect('login');
            }
            
            $this->data = [
                'username'    => $this->POST('username'),
                'password'    => md5($this->POST('password'))
            ];

            $result = $this->user_m->login($this->data);
            if (!isset($result)) {
                $this->flashmsg('username atau password salah', 'danger');
            }
            
            redirect('admin');
        }

        redirect('login');
    }
}
