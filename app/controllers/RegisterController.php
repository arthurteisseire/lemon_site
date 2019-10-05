<?php

class RegisterController extends Controller
{
    public function index($name = '')
    {
        if (!$this->isPostValid()) {
            header("Location: /?error=1");
            exit();
        }
        $user = $this->model('User');
        $user->name = $name;
        $user->create($_POST);
        $firstname = $_POST['firstname'];
        header("Location: /?success=$firstname");
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
