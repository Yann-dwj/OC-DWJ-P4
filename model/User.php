<?php

namespace Model;

class User
{
    // Attributs privés

    private $_id;
    private $_pseudo;
    private $_pass;
    private $_email;
    private $_registrationDate;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    // Getters

    public function id()
    {
        return $this->_id;
    }

    public function pseudo()
    {
        return $this->_pseudo;
    }

    public function pass()
    {
        return $this->_pass;
    }

    public function email()
    {
        return $this->_email;
    }

    public function registrationDate()
    {
        return $this->_registrationDate;
    }

    // Setters

    public function setId($id)
    {
        $this->_id = (int) $id;
    }

    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }

    public function setPass($pass)
    {
        $this->_pass = $pass;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function setRegistrationDate($registrationDate)
    {
        $this->_registrationDate = $registrationDate;
    }
}