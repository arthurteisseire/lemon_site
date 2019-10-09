<?php

class DisconnectionController
{
    public function index()
    {
        unset($_SESSION['isAdmin']);
        unset($_SESSION['user']);
    }
}