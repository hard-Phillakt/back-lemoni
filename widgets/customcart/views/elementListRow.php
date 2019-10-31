<?php

use yii\helpers\Html;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\DeleteButton;
use dvizh\cart\widgets\ElementPrice;
use dvizh\cart\widgets\ElementCost;
use yii\helpers\Url;
use yii\widgets\Pjax;


//debug($options);

//debug($model);

use app\models\CakeGoods;


$cake_goods_item = new CakeGoods();

$item = $cake_goods_item::findOne($model->item_id);

//debug($item)
?>


<li class="dvizh-cart-row">

    <div class=" row">
        <div class="col-xs-5">

            <div class="dvizh-cart-row-wrapp">

                <!--                <div class="dvizh-cart-row__img mr-30" style="background: url(./img/goods/cake/cake__1.png);">-->
                <div class="dvizh-cart-row__img mr-30" style="background: url(./<?= $item->lm_img_one ?>);">


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

        <div class="col-lg-2">
            <span><?= $item->lm_weight; ?></span> кг
        </div>

        <div class="col-xs-2">

            <div class="dvizh-cart-row__wrapp-price">

                <!--                <span class="dvizh-cart-element-price3">-->
                <? //= $item->lm_price_for_kg; ?><!--.00</span> руб-->

                <?= ElementPrice::widget(['model' => $model]); ?>

            </div>

        </div>


        <div class="col-xs-2">

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

        <div class="col-xs-1 shop-cart-delete">

            <?= Html::tag('div', DeleteButton::widget([
                'model' => $model,
                'deleteElementUrl' => $controllerActions['delete'],
                'lineSelector' => 'dvizh-cart-row',
                'cssClass' => 'delete']),
                ['class' => 'shop-cart-delete col-xs-1']);
            ?>
            <!--            <a class="dvizh-cart-delete-button delete" href="/cart/element/delete" data-url="/cart/element/delete" data-role="cart-delete-button" data-line-selector="dvizh-cart-row" data-id="3">╳</a>-->
        </div>

    </div>


    <div class="row mt-15">
        <div class="col-lg-6 col-lg-offset-1">
            <div class="dvizh-cart-show-options">


                <?php

                $canonical_url = Url::canonical();

                if ($options) {

//  $productOptions = '';

                    $id_goods = $model->id;

                    foreach ($options as $optionId => $valueId) {

//                    if ($optionData = $allOptions[$optionId]) {
//                        $option = $optionData['name'];
//                        $value = $optionData['variants'][$valueId];
//                        $productOptions .= Html::tag('div', Html::tag('strong', $option) . ':' . $value);
//                    }

//                    debug($optionId);

                        $inc = $valueId;

                        $arr = [
                            $id_goods => $optionId
                        ];

                        $json = json_encode($arr);

                        $price = explode('-', $optionId);

//                    debug($price);die;

                        $productOptions .= Html::tag('div class="box-option" ', $optionId . ':' . $valueId . '<span class="price-option">');
//                  $productOptions .= Html::tag('div class="box-option" ', $optionId . ':' . $valueId . '<span class="price-option">' . $price[1] . '</span>' . '<span class="delete-option" data-option="' . $optionId . '" data-id="' . $model->getId() . '">╳');

                    }

                    echo Html::tag('div', $productOptions, ['class' => 'dvizh-cart-show-options']);
                } ?>



                <div class="box-option">

                    <div class="dvizh-cart-show-options__img mr-30"
                         style="background: url(./img/goods/cake/cake__1.png);">

                    </div>

                    <h5 class="title title__h4">Топер “День рождения”</h5>

                    <!-- img.png-50: Это тест тайтл -->
                </div>


            </div>
        </div>

        <div class="col-lg-2">
            <div class="price-option"><span>20</span>.00 руб</div>
        </div>

        <div class="col-lg-1 col-lg-offset-2">
            <!-- сделаю на потом (в беке методы уже сделаны для удаления опций) -->
            <!-- <span class="delete-option" data-option="title-50" data-id="3">╳</span> -->
        </div>

    </div>


    <!--    <div class="row">-->
    <!--        <div class="col-lg-8 col-lg-offset-1">-->
    <!--            --><?php
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
</li>
