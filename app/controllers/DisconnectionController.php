<?php

class DisconnectionController extends Controller
{
    public function index()
    {
        unset($_SESSION['isAdmin']);
        header('Location: /');
        exit();
    }
}