<?php

namespace App\Controllers;

use App\Models\Ingr;
use T4\Mvc\Controller;

class Input
    extends Controller
{
    public function actionDefault()
    {
        $this->data->items = Ingr::findAll();
    }

    public function actionOfficial($id)
    {
        $ingr = Ingr::findByPK($id);
        $this->data->input = $ingr;
        $this->data->items = $ingr->ingrextras;

    }

    public function actionAddextra($id)
    {
        $ingr = Ingr::findByPK($id);
        $this->data->input = $ingr;
    }

    public function actionSaveextra($ingrextras)
    {
        $item = Ingr::findByPK($id);
        $item->ingrextras->fill($ingrextras)
                ->save();
        $this->redirect('/input/');



    }
}