<?php

class HomeController extends Controller
{
    public function index()
    {
        $this->view('index');
    }

    public function error()
    {
        $this->view('index', ['error' => 'Formulaire invalide']);
    }
}
