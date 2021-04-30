<?php

class adminloginModel extends database
{
    public function Login_admin($email, $password)
    {
        $result = $this->connect->prepare("SELECT * FROM `zicco_ir_usersadmin` WHERE `email`=? and `password`=?");
        $result->bindValue(1, $email);
        $result->bindValue(2, $password);
        $result->execute();
        if ($result->rowCount() == 1) {
            return  true;
        } else {
            return false;
        }
    }
}