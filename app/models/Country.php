<?php

class Country
{
    public function findCountryNameFromCountryCode($countryCode)
    {
        $res = DataBaseSingleTon::getInstance()->query("SELECT country_name FROM countries WHERE country_code = '" .
            $countryCode . "'");
       return $res->fetch()[0];
    }
}
