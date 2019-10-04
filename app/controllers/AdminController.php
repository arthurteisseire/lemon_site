<?php

class AdminController extends Controller
{
    public function index()
    {
        $error = [];
        if (isset($_GET['error']) && $_GET['error'] == 1)
            $error = ['error' => 'Invalid form'];
        $this->view('admin', $error);
    }
}
