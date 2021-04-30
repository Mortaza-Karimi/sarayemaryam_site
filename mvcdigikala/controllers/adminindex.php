<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/25/20
 * Time: 2:12 PM
 */

class adminindex extends controller
{
    public function indexAction()
    {
        $membermodel = $this->loadModel('memberModel');
        $this->loadView('admin/index/adminindex', array('title' => 'پنل مدیریت - صفحه اصلی'
        , 'countmember'=>$membermodel->countmember()
        ));
    }
}