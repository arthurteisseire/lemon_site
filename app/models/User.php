<?php

class User
{
    protected $id;
    protected $name;
    protected $firstname;
    protected $birthday;
    protected $mail;
    protected $password;
    protected $sexe;
    protected $country;
    protected $job;
    protected $isAdmin;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
       $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function setJob($job)
    {
        $this->job = $job;
    }

    public function isAdmin()
    {
        return $this->isAdmin;
    }

    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    public function setFromArray($array)
    {
        $this->setIfIsSet($array, 'name');
        $this->setIfIsSet($array, 'firstname');
        $this->setIfIsSet($array, 'birthday');
        $this->setIfIsSet($array, 'mail');
        $this->setIfIsSet($array, 'sexe');
        $this->setIfIsSet($array, 'country');
        $this->setIfIsSet($array, 'job');
        $this->setIfIsSet($array, 'isAdmin');
    }

    private function setIfIsSet($array, $attr)
    {
        $method = 'set' . ucfirst($attr);
        $this->$method($array[$attr]);
    }
}
