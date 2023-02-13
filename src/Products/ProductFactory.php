<?php

namespace StudyStreamPlus\Products;

class ProductFactory
{
    public function create(string $type): Product
    {
        switch ($type){
            case $type == 'chair':
                return new Chair();
            case $type == 'desk':
                return new Desk();
            default:
                throw new \Exception('The requested product does not exist');
        }
    }
}