<?php

require_once DIR_APPLICATION . 'controller/product/category.php';

class ControllerProductCategoryExtends extends ControllerProductCategory
{
    public function index()
    {
        $this->data['extends'] = 'extend successful';

        parent::index();
    }
}