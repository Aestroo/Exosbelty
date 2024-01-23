<?php
    class Absensi extends Controller
    {
        public function index()
        {
            $this->view('template/header', $data);
            $this->view("Absensi/login", $data);
            $this->view("template/footer", $data);
        }

        
    }
?>