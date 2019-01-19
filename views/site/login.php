<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'Login';

?>
<div class="card text-center">
      <div class="card-header">
      </div>
      <div class="card-body">
        <h5 class="card-title">
          <h1><?= Html::encode($this->title) ?></h1>
          <p>Please fill out the following fields to login:</p>
        </h5>
        <p class="card-text">
          <?php $form = ActiveForm::begin([
              'id' => 'login-form',
              'layout' => 'horizontal',
              'fieldConfig' => [
                  'template' => "{label}\n<div class=\"col-lg-4\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                  'labelOptions' => ['class' => 'col-lg-4  control-label'],
              ],
          ]); ?>

              <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

              <?= $form->field($model, 'password')->passwordInput() ?>

              <?= $form->field($model, 'rememberMe')->checkbox([
                  'template' => "<div class=\"col-lg-offset-3 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-9\">{error}</div>",
              ]) ?>

              <div class="form-group">
                  <div class="col-lg-offset-3 col-lg-6">
                      <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                  </div>
              </div>

          <?php ActiveForm::end(); ?>
        </p>
        
      <div class="card-footer text-muted">
        <?php echo"<h5>". date('d-m-Y')."</h5>"; ?>
      </div>
</div>

        