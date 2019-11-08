<?php

use yii\helpers\Html;
use yii\helpers\Url;


Url::remember();
?>

<div class="table-responsive">
    <table class="table">
        <tr>
            <th><a href="/master/news/index" class="link link__a"><i class="fas fa-hand-point-right"></i> &nbsp; Новости</a></th>
            <th><a href="/master/master-class" class="link link__a"><i class="fas fa-hand-point-right"></i> &nbsp; Мастер-классы</a></th>
            <th><a href="/master/cake-goods" class="link link__a"><i class="fas fa-hand-point-right"></i> &nbsp; Торты</a></th>
            <th><a href="/master/candie-goods" class="link link__a"><i class="fas fa-hand-point-right"></i> &nbsp; Кенди бар</a></th>
        </tr>
    </table>
</div>