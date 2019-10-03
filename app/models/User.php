<?php

class User
{
    public function create($array)
    {
        DataBaseSingleTon::getInstance()->query(
            'INSERT INTO users (name, firstname, birthday, mail, sexe, country, job) VALUES (' . $this->arrayToValues($array) . ')');
    }

    private function arrayToValues($array)
    {
        return $this->paramToValues($array['name'], $array['firstname'], $array['birthday'], $array['mail'],
            $array['sexe'], $array['country'], $array['job']);
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