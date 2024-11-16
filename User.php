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
} 
$user=new user("ahmad","AaAa#awfqewgeg");
$user->check_password();