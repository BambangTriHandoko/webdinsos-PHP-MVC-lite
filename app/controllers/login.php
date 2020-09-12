<?php 
class login extends Controller{
    public function index(){
        $this->view('auth/login');
    }
    public function wrong(){
        $this->view('auth/troll');
    }
}