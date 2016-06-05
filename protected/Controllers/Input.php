<?php

namespace App\Controllers;

use App\Models\Ingr;
use App\Models\Ingrextra;
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
        $this->data->items = Ingrextra::findAllByColumn("__ingr_id", $id);

    }

    public function actionAddextra($id)
    {
        $ingr = Ingr::findByPK($id);
        $this->data->input = $ingr;
    }

    public function actionSaveextra($extra, $id)
    {
        $maslo = Ingr::findByPK($id);
        $maslo->ingrextras->add(
            (new Ingrextra($extra))->fill($extra)
        );
        $maslo->save();
        $this->redirect('/input/official?id='.$id);

    }


    public function actionOfficials()
    {
        $this->data->items = Ingr::findAll();
        $this->data->items->ingrextras = Ingrextra::findAll();
    }
}

