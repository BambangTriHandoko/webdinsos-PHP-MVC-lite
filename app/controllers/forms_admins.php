<?php

class forms_admins extends Controller{
    public function index(){
        $data['isi'] = $this->model('artikel')->getAllartikel();
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/berita/index',$data);
        $this->view('admin/footer');
    }
    public function user(){
        $data['isi'] = $this->model('user')->getAlluser();
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/user/user',$data);
        $this->view('admin/footer');
    }
    public function pegawai(){
        $data['isi'] = $this->model('pegawai')->getAllpegawai();
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/pegawai/index',$data);
        $this->view('admin/pegawai/edit',$data);
        $this->view('admin/footer');
    }
    public function visual(){
        $data['isi'] = $this->model('visual')->getAllvisual();
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/visual/index',$data);
        $this->view('admin/footer');
    }
    public function pengaduan(){
        $data['isi'] = $this->model('pengaduan')->getAllpengaduan();
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/pengaduan/index',$data);
        $this->view('admin/footer');
    }
    public function createberita(){
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/berita/create');
        $this->view('admin/footer');
    }
    public function createpeg(){
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/pegawai/create');
        $this->view('admin/footer');
    }
    public function createuser(){
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/user/create');
        $this->view('admin/footer');
    }
    public function createvis(){
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/visual/create');
        $this->view('admin/footer');
    }
    public function editberita($artikel_id){
        $data = $this->model('artikel')->getdataid($artikel_id);
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/berita/edit',$data);
        $this->view('admin/footer');
    }
    public function editpeg($id){
        $data = $this->model('pegawai')->getdataid($id);
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/pegawai/edit',$data);
        $this->view('admin/footer');
    }
    public function edituser($id){
        $data = $this->model('user')->getdataid($id);
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/user/edit',$data);
        $this->view('admin/footer');
    }
    public function editvis($id){
        $data = $this->model('visual')->getdataid($id);
        $this->view('admin/header');
        $this->view('admin/sidebar');
        $this->view('admin/visual/edit',$data);
        $this->view('admin/footer');
    }
    public function delete($artikel_id){
        $data = $this->model('artikel')->getdataid($artikel_id);
        $this->view('admin/berita/hapus',$data);
        
    }
    public function deletepeg($id){
        $data = $this->model('pegawai')->getdataid($id);
        $this->view('admin/pegawai/delete',$data);
        
    }
    public function deleteuser($id){
        $data = $this->model('user')->getdataid($id);
        $this->view('admin/user/delete',$data);
        
    }
    public function deletevis($id){
        $data = $this->model('visual')->getdataid($id);
        $this->view('admin/visual/delete',$data);
        
    }
    public function deletepeng($id){
        $data = $this->model('pengaduan')->getdataid($id);
        $this->view('admin/pengaduan/delete',$data);
        
    }
    public function tambah(){

        $this->view('admin/berita/tambah');       
    }
    public function tambahpeg(){

        $this->view('admin/pegawai/tambah');       
    }
    public function tambahuser(){

        $this->view('admin/user/tambah');       
    }
    public function tambahvis(){

        $this->view('admin/visual/tambah');       
    }
    public function ubah($artikel_id){
        $data = $this->model('artikel')->getdataid($artikel_id);
        $this->view('admin/berita/ubah',$data);   
    }
    public function ubahpeg($id){
        $data = $this->model('pegawai')->getdataid($id);
        $this->view('admin/pegawai/ubah',$data);   
    }
    public function ubahuser($id){
        $data = $this->model('user')->getdataid($id);
        $this->view('admin/user/ubah',$data);   
    }
    public function ubahvis($id){
        $data = $this->model('visual')->getdataid($id);
        $this->view('admin/visual/ubah',$data);   
    }
    public function cetak($id){
        $data = $this->model('pengaduan')->getdataid($id);
        $this->view('admin/pengaduan/cetak',$data);   
    }
}