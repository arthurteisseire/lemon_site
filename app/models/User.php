<?php

class User
{
    public function isAdmin($mail, $password)
    {
        $stmt = "SELECT password, is_admin FROM users WHERE mail = '" . $mail . "'";
        $response = DataBaseSingleTon::getInstance()->query($stmt)->fetch();
        if (password_verify($password, $response['password']))
            return $response['is_admin'];
        return false;
    }

    public function create($array)
    {
        $stmt = 'INSERT INTO users (name, firstname, birthday, mail, password, sexe, country, job)
                 VALUES (' . $this->arrayToValues($array) . ')';
        DataBaseSingleTon::getInstance()->query($stmt);
    }

    public function findAllCountries()
    {
        $stmt = "SELECT country FROM users GROUP BY country";
        $res = DataBaseSingleTon::getInstance()->query($stmt)->fetchAll();
        $countryName = function ($elem) {
            return $elem[0];
        };
        return array_map($countryName, $res);
    }

    public function findAllUsers()
    {
        $stmt = "SELECT * FROM users";
        $res = DataBaseSingleTon::getInstance()->query($stmt)->fetchAll();
        return $res;
    }

    private function arrayToValues($array)
    {
        return $this->paramToValues($array['name'], $array['firstname'], $array['birthday'], $array['mail'],
            password_hash($array['password'], PASSWORD_DEFAULT), $array['sexe'], $array['country'], $array['job']);
    }

    private function paramToValues(...$params)
    {
        $values = "";
        $comma = "";
        foreach ($params as $param) {
            $values .= $comma;
            $values .= "'" . $param . "'";
            $comma = ",";
        }
        return $values;
    }
}
