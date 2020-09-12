<?php

class home extends Controller{
    public function index(){
        $data['isi'] = $this->model('artikel')->getAllartikel();
        $this->view('home/index',$data);
    }
    public function berita($artikel_id){
        $data = $this->model('artikel')->getdataid($artikel_id);
        $this->view('layouts/header');
        $this->view('home/berita',$data);
        $this->view('layouts/footer');
    }
    public function kategori($nama){
        $data = $this->model('kategori')->getdataid($nama);
        $this->view('layouts/header');
        $this->view('home/kategori',$data);
        $this->view('layouts/footer');
    }
    public function kategorii($kategori){
        $data = $this->model('artikel')->getdatakat($kategori);
        $this->view('layouts/header');
        $this->view('home/kategorii',$data);
        $this->view('layouts/footer');
    }

}