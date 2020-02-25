<?php

namespace Model;

use \Model\Manager;
use \Model\User;

class UserManager extends Manager
{
    public function checkPseudo($pseudo)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('SELECT pseudo FROM users WHERE LOWER(pseudo) = ?');
        $query->execute([
            strtolower($pseudo)
            ]);

        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public function checkEmail($email)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('SELECT email FROM users WHERE LOWER(email) = ?');
        $query->execute([
            strtolower($email)
            ]);

        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public function addUser(User $user)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('INSERT INTO users(pseudo, pass, email, registrationDate) VALUES(:pseudo, :pass, :email, NOW())');
        $query->execute([
            'pseudo' => $user->pseudo(),
            'pass' => $user->pass(),
            'email' => $user->email()
        ]);
    }

    public function getUser($email)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('SELECT * FROM users WHERE email = ?');
        $query->execute([
            $email
        ]);

        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$data)
        {
            return false;
        }
        else
        {
            return new User($data);
        }
    }

    public function getUsers()
    {
        $db = $this->dbConnect();

        $posts = [];

        $query = $db->query('SELECT * FROM users ORDER BY registrationDate DESC');

        while ($data = $query->fetch(\PDO::FETCH_ASSOC))
        {
            $users[] = new User($data);
        }
        
        return $users;
    }

    public function deleteUser(User $user)
    {
        $db = $this->dbConnect();

        $query = $db->prepare('DELETE FROM users WHERE id = ?');
        $query->execute([
            $user->id()
        ]);
    }
}