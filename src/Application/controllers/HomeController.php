<?php


use Application\controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->setTitle('SCS');
        $this->viewRender('frontend/leading/index');
    }


    public function about()
    {
    }


    public function contact()
    {
    }
}
