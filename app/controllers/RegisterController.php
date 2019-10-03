<?php

class RegisterController extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name;
        $user->create($_POST);

        $this->view('home', ['name' => $_POST['name']]);
    }
}
