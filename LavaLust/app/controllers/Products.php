<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Products extends Controller {

    public function index() {
        echo "<h1>Pink Theme CRUD App - Active!</h1>";
        
        try {
            $this->call->model('ProductModel');
            if (isset($this->ProductModel)) {
                $data['products'] = $this->ProductModel->get_all();
                echo "<p>Database connection: SUCCESS</p>";
                $this->call->view('products/index', $data);
            }
        } catch (Exception $e) {
            echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
        }
    }
}