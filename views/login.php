<?php
/** @var $model \app\models\User */
?>

<?php

use app\core\form\Form;

?>
<h1>Log In!</h1>
<?php $form = Form::begin('', "post") ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?= Form::end() ?>





