<?php

    class UserController
    {
        public $productModel;
        public function home_view(){
            $products = $this->productModel->get_product();
            require './views/html/home_page.php';
        }
    }
    