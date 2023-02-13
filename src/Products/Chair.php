<?php

namespace StudyStreamPlus\Products;

class Chair implements Product
{
    public function validate(): void
    {
        echo "Validate Chair\n";
    }

    public function save(): void
    {
        echo "Save Chair\n";
    }
}