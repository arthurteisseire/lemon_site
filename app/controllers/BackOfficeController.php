<?php

class BackOfficeController extends Controller
{
    public function index()
    {
        $this->checkPost();
        $this->redirectIfAdmin();
    }

    public function edit($id)
    {
        $country = $this->model('Country');
        $user = UserRepository::findById($id);
        $this->view('editUser', ['countries' => $country->findAllCountriesName(),'user' => $user]);
    }

    public function delete($id)
    {
        UserRepository::deleteById($id);
        $this->goTobackOfficeView();
    }

    public function add($countryName)
    {
        $country = $this->model('Country');
        $this->view('index', ['countries' => $country->findAllCountriesName(), 'countryName' => $countryName]);
    }

    public function save($id)
    {
        $user = UserRepository::findById($id);
        $user->setFromArray($_POST);
        UserRepository::save($user);
        $this->goTobackOfficeView();
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
        $user = UserRepository::findByMail($_POST['mail']);
        if ($user->isAdmin()) {
            $this->goTobackOfficeView();
        } else {
            header("Location: /Admin?error=2");
            exit();
        }
    }

    private function goTobackOfficeView()
    {
        $this->view('backoffice', ['countriesGroup' => $this->findUsersGroupedByCountry()]);
    }

    private function findUsersGroupedByCountry()
    {
        $countries = UserRepository::findAllCountries();
        $users = UserRepository::findAllUsers();
        $array = [];
        foreach ($countries as $country) {
            $array[$country] = array_values(array_filter($users, function ($user) use ($country) {
                return $user['country'] == $country;
            }));
        }
        return $array;
    }
}
