<?php

class BackOfficeController extends Controller
{
    public function index()
    {
        if (empty($_POST['mail']) || empty($_POST['password'])) {
            header("Location: /Admin?error=1");
            exit();
        }
        $this->view('backoffice');
    }
}
