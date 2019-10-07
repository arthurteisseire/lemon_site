<?php

class CountryRepository
{
    public function findCountryNameFromCountryCode($countryCode)
    {
        $stmt = "SELECT country_name FROM countries WHERE country_code = '" . $countryCode . "'";
        $res = DataBaseSingleTon::getInstance()->query($stmt)->fetch();
        return $res['country_name'];
    }

    public function findAllCountriesName()
    {
        $stmt = "SELECT country_name FROM countries";
        $res = DataBaseSingleTon::getInstance()->query($stmt)->fetchAll();
        $countryName = function ($elem) {
            return $elem[0];
        };
        return array_map($countryName, $res);
    }
}
