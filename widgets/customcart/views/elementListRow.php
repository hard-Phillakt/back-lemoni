<?php


use yii\helpers\Html;
//use dvizh\cart\widgets\ChangeCount;
use app\widgets\customcart\ChangeCount;

//use dvizh\cart\widgets\DeleteButton;
//use dvizh\cart\widgets\ElementPrice;
//use dvizh\cart\widgets\ElementCost;

use app\widgets\customcart\DeleteButton;
use app\widgets\customcart\ElementPrice;
use app\widgets\customcart\ElementCost;

use yii\helpers\Url;
use yii\widgets\Pjax;

//debug($options);

//debug($model);

use app\models\CakeGoods;
use app\models\CandieGoods;


//debug($model->model);


switch ($model->model) {

    case 'app\models\CakeGoods':
        $cake_goods_item = new CakeGoods();

        $item = $cake_goods_item::findOne($model->item_id);
        break;

    case 'app\models\CandieGoods':
        $candie_goods_item = new CandieGoods();

        $item = $candie_goods_item::findOne($model->item_id);
        break;
}

?>


<li class="dvizh-cart-row">

    <div class=" row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

            <div class="dvizh-cart-row-wrapp">

                <!--                <div class="dvizh-cart-row__img mr-30" style="background: url(./img/goods/cake/cake__1.png);">-->
                <div class="dvizh-cart-row__img" style="background: url(.<?= $item->lm_img_one ?>);">

                    <? //= $name ?>

                </div>

                <div class="dvizh-cart-row__title">

                    <h4 class="title title__h4">
                        <?php if (!empty($otherFields)) {
                            foreach ($otherFields as $fieldName => $field) {
                                if (isset($product->$field)) echo Html::tag('p', Html::tag('small', $fieldName . ': ' . $product->$field));
                            }
                        } ?>
                    </h4>

                </div>

            </div>

        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">

            <!-- Options Kg start -->

            <?php if ($options):foreach ($options as $key => $value): ?>

                <?= $key == 'optGuests_kg' ? '<span class="dvizh-cart-price">' . $value . '</span> кг' : false; ?>

            <?php endforeach; ?>

            <?php endif; ?>

            <!-- Options Kg end -->

        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">

            <div class="dvizh-cart-row__wrapp-price">

                <!-- <span class="dvizh-cart-element-price3" -->
                <? //= $item->lm_price_for_kg; ?><!--.00</span> руб-->

                <?= ElementPrice::widget(['model' => $model]); ?>

            </div>

        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">

            <div class="dvizh-cart-row__wrapp-price">

                <div class="dvizh-change-count">

                    <?= ChangeCount::widget([
                        'model' => $model,
                        'showArrows' => $showCountArrows,
                        'actionUpdateUrl' => $controllerActions['update'],
                    ]); ?>

                    <!--                    <a class="dvizh-arr dvizh-downArr" href="#">-</a>-->
                    <!---->
                    <!--                    <input type="number" id="cartelement-count" class="dvizh-cart-element-count" name="CartElement[count]" value="1" data-role="cart-element-count" data-line-selector="li" data-id="3" data-href="/cart/element/update">-->
                    <!---->
                    <!--                    <a class="dvizh-arr dvizh-upArr" href="#">+</a>-->

                </div>

            </div>
        </div>

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3">

            <?= Html::tag('div', DeleteButton::widget([
                'model' => $model,
                'deleteElementUrl' => $controllerActions['delete'],
                'lineSelector' => 'dvizh-cart-row',
                'cssClass' => 'delete']),
                ['class' => 'shop-cart-delete']);
            ?>
            <!--            <a class="dvizh-cart-delete-button delete" href="/cart/element/delete" data-url="/cart/element/delete" data-role="cart-delete-button" data-line-selector="dvizh-cart-row" data-id="3">╳</a>-->
        </div>

    </div>


    <!-- Options start -->
    <?php
    
    //    debug($options);

    if ($options):

        foreach ($options as $key => $value):

            $array_data = [$value];

            $arr_options = explode('-', $value);

//          фильтрую опции по ключам
            if ($key != 'optGuests_kg'): ?>

                <div class="row mt-15 xs-mb-30">
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="dvizh-cart-show-options">

                            <div class="box-option">

                                <?php

                                // делаю проверку на глазурь
                                if ($arr_options[0][0] == '#'): ?>

                                    <div class="dvizh-cart-show-options__circle mr-30"
                                         style="background: <?= $arr_options[0]; ?>"></div>

                                    <h5 class="title title__h4"><?= $arr_options[2]; ?></h5>

                                <?php else: ?>

                                    <div class="dvizh-cart-show-options__img mr-30"
                                         style="background: url(./img/card-opt/<?= $arr_options[0] ?>.png);">
                                        <!-- style="background: url(./img/goods/cake/cake__1.png);"> -->

                                    </div>

                                    <h5 class="title title__h4"><?= $arr_options[2]; ?></h5>
                                    <!--                            <h5 class="title title__h4">Топер “День рождения”</h5>-->

                                <?php endif; ?>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2">

                        <div class="price-option"><span><?= $arr_options[1]; ?></span></div>

                    </div>

                    <div class="col-lg-1 col-lg-offset-2">
                        <!-- сделаю потом (в беке методы уже сделаны для удаления опций) -->
                        <!--            <span class="delete-option" data-option="title-50" data-id="3">╳</span>-->
                    </div>

                </div>

            <?php endif; ?>

        <?php endforeach; ?>

    <?php endif; ?>

    <!-- Options end -->
</li>


<!-- Options by cart deafult -->

<!--    <div class="row">-->
<!--        <div class="col-lg-8 col-lg-offset-1">-->
<!--        --><?php
//
//            $canonical_url = Url::canonical();
//
//            if ($options) {
//
////              $productOptions = '';
//
//                $id_goods = $model->id;
//
//                foreach ($options as $optionId => $valueId) {
//
////                    if ($optionData = $allOptions[$optionId]) {
////                        $option = $optionData['name'];
////                        $value = $optionData['variants'][$valueId];
////                        $productOptions .= Html::tag('div', Html::tag('strong', $option) . ':' . $value);
////                    }
//
////                    debug($optionId);
//
//                    $inc = $valueId;
//
//                    $arr = [
//                        $id_goods => $optionId
//                    ];
//
//                    $json = json_encode($arr);
//
//                    $price = explode('-', $optionId);
//
////                    debug($price);die;
//
//                    $productOptions .= Html::tag('div class="box-option" ', $optionId . ':' . $valueId . '<span class="price-option">');
////                  $productOptions .= Html::tag('div class="box-option" ', $optionId . ':' . $valueId . '<span class="price-option">' . $price[1] . '</span>' . '<span class="delete-option" data-option="' . $optionId . '" data-id="' . $model->getId() . '">╳');
//
//                }
//
//                echo Html::tag('div', $productOptions, ['class' => 'dvizh-cart-show-options']);
//            } ?>
<!--        </div>-->
<!--    </div>-->

