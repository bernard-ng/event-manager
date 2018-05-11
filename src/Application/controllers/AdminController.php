<?php

use Application\controllers\Controller;

class AdminController extends Controller
{


    public function index()
    {
        $this->viewRender('backend/index');
    }
}
