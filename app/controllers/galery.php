<?php

class galery extends Controller{
    public function index(){

        $this->view('layouts/header');
        $data['isi'] = $this->model('artikel')->getAllartikel();
        $this->view('galery/index',$data);
        $this->view('layouts/footer');

    }
}