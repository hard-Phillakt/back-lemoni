<?php

use yii\helpers\Html;

?>

<form>
    <input type="hidden" name="truncate" value="TRUNCATE_CART">
    <?= Html::submitButton('Clear Table: Cart', ['class' => 'btn btn-warning'])?>
</form>
