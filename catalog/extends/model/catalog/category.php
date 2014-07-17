<?php

require_once DIR_APPLICATION . '/model/catalog/category.php';

class ModelCatalogCategoryExtends extends ModelCatalogCategory
{
    public function getCategory($category_id)
    {
        $category_info = parent::getCategory($category_id);
        $category_info['extends'] = 'extended';

        return $category_info;
    }
}