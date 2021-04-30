<?php


class adminchangepassModel extends database
{
    public function checkPasswordAdmin($password)
    {
        $result = $this->connect->prepare('SELECT `password` FROM `zicco_ir_usersadmin` WHERE `password`=?  LIMIT 1');
        $result->bindValue(1, $password);
        $result->execute();
        if ($result->rowCount() == 1) {
            // اکر پسورد با پسورد داده شده یکسان بود ترو را برگردان
            return true;
        } else {
            // در غیر این صورت فالس رابرگردان
            return false;
        }
    }


    public function changePasswordAdmin($password)
    {
        $result = $this->connect->prepare('UPDATE `zicco_ir_usersadmin` SET  `password`=? LIMIT 1');
        $result->bindValue(1, $password);
        if ($result->execute()) {
            return true;
        } else {
            return  false;
        }
    }
}

