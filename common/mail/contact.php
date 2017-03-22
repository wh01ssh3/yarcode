<?php
use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: Elenochka
 * Date: 22.03.2017
 * Time: 21:57
 */
?>
<div>
    <table>
        <tr><td>Name</td><td> <?= Html::encode($model->name) ?></td></tr>
        <tr><td>Phone</td><td> <?= Html::encode($model->phone) ?></td></tr>
        <tr><td>Message</td><td> <?= Html::encode($model->message) ?></td></tr>
    </table>
</div>
