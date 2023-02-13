<?php

require_once 'vendor/autoload.php';

use StudyStreamPlus\Csv;
use StudyStreamPlus\Products\ProductFactory;

$factory = new ProductFactory();
$csv = new Csv($factory);
$csv->import();