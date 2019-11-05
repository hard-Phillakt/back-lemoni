<?php

namespace app\widgets\sidebar;

/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 05.11.2019
 * Time: 10:25
 */
class Sidebar extends \yii\base\Widget{


    public function init(){

        parent::init();
//        return false;
    }


    public function run(){


        return $this->render('index');

    }
}