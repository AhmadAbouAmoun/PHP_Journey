<?php
class user{
    public $password;
    public $email;
    public function __construct($email,$password)
    {
        $this->email=$email;
        $this->password=$password;
    }
} 