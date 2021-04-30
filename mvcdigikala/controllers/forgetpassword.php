<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/20
 * Time: 4:03 PM
 */

class forgetpassword extends controller
{
    public function indexAction()
    {
        $this->loadView('user/forgetpassword/forgetpassword_index', array('title' => 'فراموشی پسورد'));
    }
}