<?php


// این کنترلر پیشفرض این برنامه میباشد

class zicco extends controller
{
    public function indexAction()
    {
        $this->loadView('user/zicco/zicco_index', array('title' => 'صفحه اصلی'));
    }
}