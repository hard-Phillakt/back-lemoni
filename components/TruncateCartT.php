<?php
/**
 * Created by PhpStorm.
 * User: NET-USER3
 * Date: 07.02.2020
 * Time: 10:19
 */

namespace app\components;

use Yii;
use yii\base\Component;

class TruncateCartT extends Component
{

    const _TRUNCATE_CART = 'TRUNCATE_CART';

    public static function truncateCartT($arg)
    {

//      Очищаем от мусора таблицу cart
//      (При заходе нового пользователя, плагином корзины делается запись по временной метке в качестве нового юзера
//      Кнопка в админке для очистики таблицы cart по усмотрению админа.)

        if (self::_TRUNCATE_CART == $arg) {
            Yii::$app->db->createCommand('DELETE FROM `cart`')->execute();
        }

    }

}