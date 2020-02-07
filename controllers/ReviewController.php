<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 24.09.2019
 * Time: 10:44
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ReviewForm;
use yii\web\UploadedFile;

// Страница "Отзывов"
class ReviewController extends Controller
{

    public $layout = 'base';

    public static function sender($model)
    {
        $id = date('U');
        $fileIdName = $model->file->extension ? "./xenos/uploads/image/image__{$id}.{$model->file->extension}" : './img/no-image.png';

        $data = "<p>Имя: {$model->name}<p>";
        $data .= "<p>Телефон: {$model->phone} <p>";
        $data .= "<p>Комментарий: {$model->comment} <p>";

        Yii::$app->mailer->compose()
            ->attach($fileIdName)
            ->setFrom('info@cafelemoni.ru')
            ->setTo([
                'hard-phillakt@mail.ru' => 'Отзыв с сайта: cafelemoni.ru',
                'info@cafelemoni.ru' => 'Отзыв с сайта: cafelemoni.ru',
                'info@webmedia31.ru' => 'Отзыв с сайта: cafelemoni.ru'
            ])
            ->setSubject('Отзыв с Cafelemoni')
            ->setHtmlBody('<div>' . $data . '</div>')
            ->send();
    }


    public function actionIndex()
    {
        $model = new ReviewForm();

        if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isPjax) {

            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->file) {

                $model->upload();

                self::sender($model);

            } else {

//              Если отзыв без видео
                self::sender($model);

            }
        }

        return $this->render('index', ['model' => $model]);
    }
}