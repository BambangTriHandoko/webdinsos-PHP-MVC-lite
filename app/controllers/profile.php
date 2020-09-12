<?php

class profile extends Controller{
    public function index(){

        $this->view('profile/header');
        $this->view('profile/sidebar');
        $this->view('profile/index');
        $this->view('profile/footer');
    }
    public function selayangpandang(){

        $this->view('profile/header');
        $this->view('profile/sidebar');
        $this->view('profile/selayangpandang');
        $this->view('profile/footer');
    }
    public function tupoksi(){

        $this->view('/profile/header');
        $this->view('/profile/sidebar');
        $this->view('/profile/tupoksi');
        $this->view('/profile/footer');
    }
    public function dasarhukum(){

        $this->view('/profile/header');
        $this->view('/profile/sidebar');
        $this->view('/profile/dasarhukum');
        $this->view('/profile/footer');
    }
    public function tujuan(){

        $this->view('/profile/header');
        $this->view('/profile/sidebar');
        $this->view('profile/tujuan');
        $this->view('/profile/footer');
    }
    public function pmks(){

        $this->view('/profile/header');
        $this->view('/profile/sidebar');
        $this->view('/profile/pmks');
        $this->view('/profile/footer');
    }
    public function struktur(){

        $this->view('/profile/header');
        $this->view('/profile/sidebar');
        $this->view('/profile/struktur');
        $this->view('/profile/footer');
    }
    public function daftarpeg(){
        $data['isi'] = $this->model('pegawai')->getAllpegawai();
        $this->view('/profile/header');
        $this->view('/profile/sidebar');
        $this->view('/profile/daftarpeg',$data);
        $this->view('/profile/footer');
    }

    
}