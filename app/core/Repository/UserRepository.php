<?php
require_once 'app/models/User.php';

class UserRepository
{
    public static function findById($id)
    {
        $stmt = "SELECT * FROM users WHERE id = '$id'";
        $serializedUser = DataBaseSingleTon::getInstance()->query($stmt)->fetch();
        return self::deserialize($serializedUser);
    }

    public static function findByMail($mail)
    {
        $stmt = "SELECT * FROM users WHERE mail = '$mail'";
        $serializedUser = DataBaseSingleTon::getInstance()->query($stmt)->fetch();
        return self::deserialize($serializedUser);
    }

    public static function create($serializedUser)
    {
        $stmt = 'INSERT INTO users (name, firstname, birthday, mail, password, sexe, country, job)
                 VALUES (' . self::arrayToValues($serializedUser) . ')';
        DataBaseSingleTon::getInstance()->query($stmt);
    }

    public static function deleteById($id)
    {
        $stmt = "DELETE FROM users WHERE id = $id";
        DataBaseSingleTon::getInstance()->query($stmt);
    }

    public static function save($user)
    {
        $stmt = "UPDATE users
                 SET " . self::arrayToSet(self::serialize($user), 'name', 'firstname', 'birthday', 'mail', 'sexe', 'country', 'job', 'isAdmin') . "
                 WHERE id = " . $user->getId();
        DataBaseSingleTon::getInstance()->query($stmt);
    }

    public static function deserialize($serializedUser)
    {
        $user = new User();
        $user->setId($serializedUser['id']);
        $user->setName($serializedUser['name']);
        $user->setFirstname($serializedUser['firstname']);
        $user->setBirthday($serializedUser['birthday']);
        $user->setMail($serializedUser['mail']);
        $user->setPassword($serializedUser['password']);
        $user->setSexe($serializedUser['sexe']);
        $user->setCountry($serializedUser['country']);
        $user->setJob($serializedUser['job']);
        $user->setIsAdmin($serializedUser['isAdmin']);
        return $user;
    }

    public static function serialize($user)
    {
        $serializedUser['id'] = $user->getId();
        $serializedUser['name'] = $user->getName();
        $serializedUser['firstname'] = $user->getFirstname();
        $serializedUser['birthday'] = $user->getBirthday();
        $serializedUser['mail'] = $user->getMail();
        $serializedUser['password'] = $user->getPassword();
        $serializedUser['sexe'] = $user->getSexe();
        $serializedUser['country'] = $user->getCountry();
        $serializedUser['job'] = $user->getJob();
        $serializedUser['isAdmin'] = $user->isAdmin();
        return $serializedUser;
    }

    public static function findAllCountries()
    {
        $stmt = "SELECT country FROM users GROUP BY country";
        $res = DataBaseSingleTon::getInstance()->query($stmt)->fetchAll();
        $countryName = function ($elem) {
            return $elem[0];
        };
        return array_map($countryName, $res);
    }

    public static function findAllUsers()
    {
        $stmt = "SELECT * FROM users";
        $res = DataBaseSingleTon::getInstance()->query($stmt)->fetchAll();
        return $res;
    }

    public static function findUsersGroupedByCountry()
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

    public static function arrayToSet($array, ...$params)
    {
        $comma = "";
        $s = "";
        foreach ($params as $param) {
            $s .= "$comma$param = '$array[$param]'";
            $comma = ",";
        }
        return $s;
    }

    private static function arrayToValues($array)
    {
        return self::paramToValues($array['name'], $array['firstname'], $array['birthday'], $array['mail'],
            password_hash($array['password'], PASSWORD_DEFAULT), $array['sexe'], $array['country'], $array['job']);
    }

    private static function paramToValues(...$params)
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
