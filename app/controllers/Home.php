<?php
    class Home extends Controller
    {
        public function index($nama = "sasa", $hobi = "membaca")
        {
            $this->view("home/index");
        }

        
    }
?>