<?php

class HomeController extends Controller
{
    public function index()
    {
        $country = $this->model('Country');
        $countryName = $country->findCountryNameFromCountryCode($this->findCountryCode());
        $data = ['countryName' => $countryName, 'countries' => $country->findAllCountriesName()];
        if (isset($_GET['error']) && $_GET['error'] == 1)
            $data['error'] = 'Invalid Form';
        $this->view('index', $data);
    }

    private function findCountryCode()
    {
        $array = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $this->findExternalIp()));
        return $array['geoplugin_countryCode'];
    }

    private function findExternalIp()
    {
        $externalContent = file_get_contents('http://checkip.dyndns.com/');
        preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
        return $m[1];
    }
}
