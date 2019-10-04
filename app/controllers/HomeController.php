<?php

class HomeController extends Controller
{
    public function index()
    {
        if (isset($_GET['error']) && $_GET['error'] == 1)
            $this->error();
        else
            $this->view('index');
    }

    public function error()
    {
        $this->view('index', ['error' => 'Formulaire invalide']);
    }
}
