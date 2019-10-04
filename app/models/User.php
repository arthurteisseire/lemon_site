<?php

class User
{
    public function create($array)
    {
        DataBaseSingleTon::getInstance()->query(
            'INSERT INTO users (name, firstname, birthday, mail, password, sexe, country, job) VALUES (' .
            $this->arrayToValues($array) . ')');
    }

    private function arrayToValues($array)
    {
        return $this->paramToValues($array,
            'name', 'firstname', 'birthday', 'mail', 'password', 'sexe', 'country', 'job');
    }

    private function paramToValues($array, ...$params)
    {
        $values = "";
        $comma = "";
        foreach ($params as $param) {
            $values .= $comma;
            $values .= "'" . $array[$param] . "'";
            $comma = ",";
        }
        return $values;
    }
}
