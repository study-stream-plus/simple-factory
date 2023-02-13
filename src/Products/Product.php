<?php

namespace StudyStreamPlus\Products;

interface Product
{
    public function validate(): void;

    public function save(): void;
}