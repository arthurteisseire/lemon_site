<?php

class RegisterController extends Controller
{
    public function index($name = '')
    {
        if (!$this->isPostValid()) {
            if ($_SESSION['isAdmin']) {
                header("Location: /BackOffice/?error=1");
                exit();
            } else {
                header("Location: /?error=1");
                exit();
            }
        }
        UserRepository::create($_POST);
        $firstname = $_POST['firstname'];
        if ($_SESSION['isAdmin']) {
            header("Location: /BackOffice");
            exit();
        } else {
            header("Location: /?success=$firstname");
            exit();
        }
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
