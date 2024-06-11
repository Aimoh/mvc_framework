<?php
/** @var $model \app\models\User */
?>

<?php

use app\core\form\Form;

?>
<h1>Register here!</h1>
<?php $form = Form::begin('', "post") ?>
<div class="row">
    <div class="col">
        <?= $form->field($model, 'firstname') ?>
    </div>
    <div class="col">
        <?= $form->field($model, 'lastname') ?>
    </div>
</div>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'password')->passwordField() ?>
<?= $form->field($model, 'confirmPassword')->passwordField() ?>

<button type="submit" class="btn btn-primary">Submit</button>
<?= Form::end() ?>





