<?php
class user{
    public $password;
    public $email;
    public function __construct($email,$password)
    {
        $this->email=$email;
        $this->password=$password;
    }
    public function check_password (){
        $regex='/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{12,}$/';
        if(preg_match($regex,$this->password)){
            echo"right password format ";
            return true;
        }
        else{
            echo"wrong password format ";
            return false;
        }
    }
    public function validate_email(){
        if(filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            echo"right email format ";
            return true;
        }
        else{
            echo"wrong email format ";
            return true;
        }

    }
} 
$user=new user("ahmad@gmail.com","AaAa#awfqewgeg");
$user->check_password();
$user->validate_email();