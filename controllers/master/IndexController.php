<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 07.11.2019
 * Time: 15:26
 */

namespace app\controllers\master;


use yii\web\Controller;

class IndexController extends Controller
{

    public $layout = 'master';

    public function actionIndex()
    {


        return $this->render('index');
    }

}