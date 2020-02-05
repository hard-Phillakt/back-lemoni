<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:41
 */

namespace app\controllers;

use yii\web\Controller;

use Yii;

// подключил модель мастер классов
use app\models\MasterClass;
use app\models\MasterClassForm;


// Страница "Мастер классов"
class MasterClassController extends Controller
{
    public function actionIndex(){


        $query = new MasterClass();

        $model = $query::find()->orderBy('id DESC')->all();

        $masterClassForm = new MasterClassForm();

        if ($masterClassForm->load(Yii::$app->request->post()) && !empty($masterClassForm)) {

            $userData = Yii::$app->request->post();

            $data = '<div>';
            $data .= '<p><strong><h3>Запись на мастер-класс:</h3></strong>'. '</p>';
            $data .= '<p><strong style="color:#8F5541;">Имя: </strong>' . $userData['MasterClassForm']['name']. '</p>';
            $data .= '<p><strong style="color:#8F5541;">Телефон: </strong>' . $userData['MasterClassForm']['phone']. '</p>';
            $data .= '<p><strong style="color:#8F5541;">Комментарий: </strong>' . $userData['MasterClassForm']['comment']. '</p>';
            $data .= '<p><strong style="color:#8F5541;">Мастер-класс: </strong>' . $userData['MasterClassForm']['title_master']. '</p>';
            $data .= '</div>';

            Yii::$app->mailer->compose()
                ->setFrom('info@cafelemoni.ru')
                ->setTo([
                    'hard-phillakt@mail.ru' => 'Заказ на мастер-класс: cafelemoni.ru',
                    'info@cafelemoni.ru' => 'Заказ на мастер-класс: cafelemoni.ru',
                    'info@webmedia31.ru' => 'Заказ на мастер-класс: cafelemoni.ru'
                ])
                ->setSubject('Заказ на мастер-класс Cafelemoni')
                ->setTextBody('Заказ на мастер-класс Cafelemoni')
                ->setHtmlBody('<div>'. $data .'</div>')
                ->send();

            return $this->redirect('/master-class');
        }


        return $this->render('index', ['model' => $model, 'masterClassForm' => $masterClassForm]);
    }
}