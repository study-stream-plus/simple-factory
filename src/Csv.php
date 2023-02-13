<?php

namespace StudyStreamPlus;

use StudyStreamPlus\Products\ProductFactory;

class Csv
{
    protected ProductFactory $factory;

    public function __construct(ProductFactory $factory)
    {
        $this->factory = $factory;
    }

    public function import(): void
    {
        // Imagine we have read this product data from the CSV.
        $products = [
            ['type' => 'chair', 'quantity' => 4],
            ['type' => 'desk', 'quantity' => 3],
        ];

        // Save each product to a data store.
        foreach ($products as $product) {
            $product = $this->factory->create($product['type']);
            $product->validate();
            $product->save();
        }
    }
}