<?php

namespace app\components;


use Yii;
use yii\base\Component;



class SendEmailClass extends Component {

    const PARAM_FORM = 'PARAM_FORM';

    public static function request(){

        return Yii::$app->request;
    }

    public static function sendMail(){

        $post = self::request()->post();

        if ($post && self::request()->isAjax) {

            $swiftData = '<h1> Заказ в один клик </h1>';
            $swiftData .= '<p> Имя: ' . $post['MasterClassForm']['name'] .'</p>';
            $swiftData .= '<p> Телефон: ' . $post['MasterClassForm']['phone'] .'</p>';
            $swiftData .= '<p> Товар: ' . $post['MasterClassForm']['title_master'] .'</p>';

            $swift = Yii::$app->mailer->compose();
            $swift->setFrom('hard-phillakt@mail.ru')
                ->setTo('hard-phillakt@mail.ru')
                ->setSubject('Заказ в один клик')
                ->setTextBody('Заказ в один клик')
                ->setHtmlBody($swiftData)
                ->send();
        }
    }

    public function init(){

        parent::init();

        $this->trigger(self::PARAM_FORM);
    }

}