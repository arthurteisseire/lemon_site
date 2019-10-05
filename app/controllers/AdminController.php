<?php

class AdminController extends Controller
{
    public function index()
    {
        $error = [];
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 1)
                $error = ['error' => 'Invalid form'];
            else if ($_GET['error'] == 2)
                $error = ['error' => 'User is not admin'];
        }
        $this->view('admin', $error);
    }
}
