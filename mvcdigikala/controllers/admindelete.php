<?php


class admindelete extends controller
{
    protected $address = 'http://localhost/mvcdigikala/';
    public function deletemember($id)
    {
        $membermodel = $this->loadModel('memberModel');
        if ($membermodel->deletemember($id)) {
            // اگر توانست کاربر را حذف کند
            header('location:'.$this->address.'adminlistmember');
        }
    }
}