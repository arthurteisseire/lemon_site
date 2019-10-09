<?php

class BackOfficeController extends Controller
{
    public function index()
    {
        $this->connect();
        $this->redirectIfAdmin();
    }

    public function connect()
    {
        if (!empty($_POST['mail']) || !empty($_POST['password'])) {
            $user = UserRepository::findByMail($_POST['mail']);
            if (password_verify($_POST['password'], $user->getPassword()) && $user->isAdmin()) {
                $_SESSION['isAdmin'] = true;
            }
        }
    }

    public function redirectIfAdmin()
    {
        if (isset($_SESSION['isAdmin'])) {
            $this->goTobackOfficeView();
        } else {
            header("Location: /Admin?error=2");
            exit();
        }
    }

    public function edit($id)
    {
        if (isset($_SESSION['isAdmin'])) {
            $user = UserRepository::findById($id);
            $this->view('editUser', ['countries' => CountryRepository::findAllCountriesName(), 'user' => $user]);
        } else {
            header("Location: /");
        }
    }

    public function delete($id)
    {
        if (isset($_SESSION['isAdmin'])) {
            UserRepository::deleteById($id);
            $this->goTobackOfficeView();
        } else {
            header("Location: /");
        }
    }

    public function add($countryName)
    {
        if (isset($_SESSION['isAdmin'])) {
            $this->view('index', ['countries' => CountryRepository::findAllCountriesName(), 'countryName' => $countryName]);
        } else {
            header("Location: /");
        }
    }

    public function save($id)
    {
        $user = UserRepository::findById($id);
        $user->setFromArray($_POST);
        UserRepository::save($user);
        $this->goTobackOfficeView();
    }

    private function goTobackOfficeView()
    {
        $this->view('backoffice', ['countriesGroup' => UserRepository::findUsersGroupedByCountry()]);
    }
}
