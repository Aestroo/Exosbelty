<?php
    class Siswa extends Controller{
        public function index()
        {
            $data['nama'] = 'Ranee';
            $this->view('template/header', $data);
            $this->view("siswa/index", $data);
            $this->view("template/footer", $data);
        }
    }
?>