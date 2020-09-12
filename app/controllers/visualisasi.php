<?php

class visualisasi extends Controller{
    public function index(){
        $visual['isi'] = $this->model('visual')->getAllvisual();
        $this->view('layouts/header');
        $this->view('visualisasi/index',$visual);
        $this->view('layouts/footer');
    }
    public function data(){
    $this->view('visualisasi/data');
    }

}