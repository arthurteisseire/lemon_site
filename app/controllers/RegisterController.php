<?php

class RegisterController extends Controller
{
    public function index($name = '')
    {
        if (!$this->isPostValid()) {
            header("Location: /Home/error");
            exit();
        }
        $user = $this->model('User');
        $user->name = $name;
        $user->create($_POST);
        $this->view('home', ['name' => $_POST['name']]);
    }

    private function isPostValid()
    {
        if ($this->arePostNotEmpty('name', 'firstname', 'birthday', 'mail', 'sexe', 'country', 'job'))
            return true;
        return false;
    }

    private function arePostNotEmpty(...$params)
    {
        foreach ($params as $param)
            if (empty($_POST[$param]))
                return false;
        return true;
    }
}
