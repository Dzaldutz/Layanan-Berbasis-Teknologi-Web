<?php
require_once 'category_model.php';
require_once 'category_view';

class Category_controller {
    private $Model;

    public function __construct() {
        $this->Model = new Category_model();
    }

    public function index() {
        $categories = $this->Model->getAllCategories();
        require_once 'category_view.php';
    }
}

$Controller = new Category_controller();
$Controller->index();
?>