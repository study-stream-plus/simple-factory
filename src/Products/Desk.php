<?php

namespace StudyStreamPlus\Products;

class Desk implements Product
{
    public function validate(): void
    {
        echo "Validate Desk\n";
    }

    public function save(): void
    {
        echo "Save Desk\n";
    }
}