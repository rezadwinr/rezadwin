<?php
class User extends Controller {
    public function index() {
        $data['judul'] = "User";
        $this->view('templates/header', $data);
        $this->view('user/index');
        $this->view('templates/footer');
    }
    public function profile($nama = "Reza",$pekerjaan = "Pelajar") {
        $data['judul'] = "Profil";
        $data['nama'] = $this->model('User_model')->getUser();
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header', $data);
        $this->view('user/profile', $data);
        $this->view('templates/footer');
    }
}