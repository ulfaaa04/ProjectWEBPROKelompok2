<?php

class Autentifikasi extends CI_Controller{

    public function login()
    {
        $this->form_validation->set_rules('username','Username','required',[
            'required' => 'Username wajib diisi!'
        ]);
        $this->form_validation->set_rules('password','Password','required',[
            'required' => 'Password wajib diisi!'
        ]);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('formmasuk');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->ModelAutentifikasi->cek_login();

            if($auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">Username atau Password Salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
                redirect('autentifikasi/login');
            } else {
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('role_id',$auth->role_id);

                switch($auth->role_id){
                    case 1 :    redirect('admin/DashboardAdmin');
                                break;
                    case 2 :    redirect('SelamatDatang');
                                break;
                    default: break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('autentifikasi/login');
    }
}