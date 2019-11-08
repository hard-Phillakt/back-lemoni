<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 07.11.2019
 * Time: 15:26
 */

namespace app\controllers\master;


use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class IndexController extends Controller
{

    public $layout = 'master';


    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'only' => [],
                'rules' => [
                    // разрешаем аутентифицированным пользователям
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // всё остальное по умолчанию запрещено
                ],
                'denyCallback' => function() {
                    $this->redirect('/');
                }
            ],
        ];
    }


    public function actionIndex()
    {


        return $this->render('index');
    }

}