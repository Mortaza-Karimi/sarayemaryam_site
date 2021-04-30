<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/1/20
 * Time: 12:09 PM
 */

class users extends controller
{
    public function indexAction()
    {
        $this->loadView('user/users/users_index', array('title' => 'ثبت نام | ورود'));
    }
}