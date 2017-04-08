<?php

use yii\helpers\Url;
use yii\helpers\Html;
use humhub\compat\CActiveForm;

?>
\
<div class="panel panel-default">
    <div class="panel-heading"><?= Yii::t('PrivacyboxModule.views_admin_index', 'Privacy Box Configuration'); ?></div>
    <div class="panel-body">

        <?php $form = CActiveForm::begin(['id' => 'privacybox-settings-form']); ?>

        <?= $form->errorSummary($model); ?>

        <?= $form->field($model, 'active')->checkbox(); ?>
        <?= $form->field($model, 'title', ['inputOptions' =>['class' => 'form-control']]); ?>
        <?= $form->field($model, 'statement', ['inputOptions' =>['class' => 'form-control']]); ?>

        <div class="form-group">
             <?= $form->field($model, 'content', ['inputOptions' => ['class' => 'form-control', 'id' => 'newMessageText']])->textarea(); ?>
             <?= \humhub\widgets\MarkdownEditor::widget(['fieldId' => 'newMessageText']); ?>
             <?= $form->error($model, 'content'); ?>
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <?= $form->checkBox($model, 'reset'); ?> <?= $model->getAttributeLabel('reset'); ?>
                </label>
            </div>
        </div>

        <hr>

        <?= Html::submitButton(Yii::t('PrivacyboxModule.views_admin_index', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => '']); ?>
        <a class="btn btn-default" href="<?= Url::to(['/admin/module']); ?>"><?= Yii::t('PrivacyboxModule.views_admin_index', 'Back to modules'); ?></a>

        <?php CActiveForm::end(); ?>
    </div>
</div>
