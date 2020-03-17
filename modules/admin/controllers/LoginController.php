<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 08.11.2019
 * Time: 10:52
 */

namespace app\modules\admin\controllers;

//cNCq37s3: $2y$13$cEJSSahKowcUzKct8lBLOOuhvb805Epqrduz7VdHa.zwKXzPOaPjC

use yii\web\Controller;

use Yii;
use app\models\Login;
use app\models\User;


class LoginController extends Controller
{

    public $layout = 'base';

//  вторизовываем пользователя
    public function actionIndex()
    {

//      Если гость то позволяем авторизоватся
        if(Yii::$app->user->isGuest){

            $model = new Login();

            if ($data = $model->load(Yii::$app->request->post()) && $login = Yii::$app->request->post()) {

                $remember = Yii::$app->request->post();

                $query = new User();

                $user = $query::findOne(['name' => $login['Login']['name']]);

                $successPass = Yii::$app->getSecurity()->validatePassword($login['Login']['password'], $user->password);

                if ($successPass) {

                    Yii::$app->user->login($user, 3600*24*30);

                    return $this->redirect('/admin/news');

                }

            }

        } else {

            return $this->redirect('/admin/news');
        }



        return $this->render('index', ['model' => $model]);
    }


//  Разлогиниваем пользователя
    public function actionLogOut()
    {

        Yii::$app->user->logout();

        return $this->redirect('/');

    }

}