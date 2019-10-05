<?php

class BackOfficeController extends Controller
{
    public function index()
    {
        $this->checkPost();
        $this->redirectIfAdmin();
    }

    public function checkPost()
    {
        if (empty($_POST['mail']) || empty($_POST['password'])) {
            header("Location: /Admin?error=1");
            exit();
        }
    }

    public function redirectIfAdmin()
    {
        $user = $this->model('User');
        if ($user->isAdmin($_POST['mail'], $_POST['password']))
            $this->view('backoffice');
        else {
            header("Location: /Admin?error=2");
            exit();
        }
    }
}
