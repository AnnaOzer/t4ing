<?php

namespace App\Controllers;

use App\Models\Product;
use T4\Mvc\Controller;

class Output
    extends Controller
{
    public function actionDefault()
    {
        $this->data->items = Product::findAll();
    }


}