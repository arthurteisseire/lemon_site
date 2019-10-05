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
        $user = $this->model('User');
        $userData = $user->find($id);
        $this->view('editUser', ['user' => $userData]);
    }

    public function delete($id)
    {
        $user = $this->model('User');
        $user->delete($id);
        $this->goTobackOfficeView();
    }

    public function add($id)
    {
        print $id;
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
        if ($user->isAdmin($_POST['mail'], $_POST['password'])) {
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
        $user = $this->model('User');
        $countries = $user->findAllCountries();
        $users = $user->findAllUsers();
        $array = [];
        foreach ($countries as $country) {
            $array[$country] = array_values(array_filter($users, function ($user) use ($country) {
                return $user['country'] == $country;
            }));
        }
        return $array;
    }
}
