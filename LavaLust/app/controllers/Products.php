<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Products extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('ProductModel');
        $this->call->library('session');
    }

    public function index() {
    echo "<h1 style='color: pink;'>Test Output: Active na ang Products Controller!</h1>";
}

    public function create() {
        $this->call->view('products/create');
    }

    public function store() {
        if($this->io->post()) {
            $data = array(
                'product_name' => $this->io->post('product_name'),
                'description'  => $this->io->post('description'),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity')
            );
            $this->ProductModel->insert($data);
            redirect('products');
        }
    }

    public function edit($id) {
        $data['product'] = $this->ProductModel->get_by_id($id);
        $this->call->view('products/edit', $data);
    }

    public function update($id) {
        if($this->io->post()) {
            $data = array(
                'product_name' => $this->io->post('product_name'),
                'description'  => $this->io->post('description'),
                'price'        => $this->io->post('price'),
                'quantity'     => $this->io->post('quantity')
            );
            $this->ProductModel->update($id, $data);
            redirect('products');
        }
    }

    public function delete($id) {
        $this->ProductModel->delete($id);
        redirect('products');
    }
}