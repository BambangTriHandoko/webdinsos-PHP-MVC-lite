<?php

class pengaduan extends Controller{
    public function index(){
        $this->view('layouts/header');
        $this->view('pengaduan/index');
        $this->view('layouts/footer');
    }
    public function kirim(){
        $this->view('pengaduan/kirim');
    }
}