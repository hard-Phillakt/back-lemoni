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

        if (self::_TRUNCATE_CART == $arg) {
            Yii::$app->db->createCommand('DELETE FROM `cart`')->execute();
        }

    }

}