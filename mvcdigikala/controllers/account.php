<?php


class account extends controller
{
    public function indexAction()
    {
        $this->loadView('user/account/account_index',array('title'=>'مشخصات کاربر'));
    }
}