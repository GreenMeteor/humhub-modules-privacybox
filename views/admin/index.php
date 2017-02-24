<?php

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use humhub\compat\ActiveForm;

?>
\
<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('PrivacyboxModule.views_admin_index', 'Privacy Box Configuration'); ?></div>
    <div class="panel-body">

        <?php $form = ActiveForm::begin(['id' => 'privacybox-settings-form']); ?>

        <?php echo $form->errorSummary($model); ?>

        <?php echo $form->field($model, 'active')->checkbox(); ?>
        <?php echo $form->field($model, 'title', ['inputOptions' =>['class' => 'form-control']]); ?>
        <?php echo $form->field($model, 'statement', ['inputOptions' =>['class' => 'form-control']]); ?>

        <div class="form-group">
             <?php echo $form->field($model, 'content', ['inputOptions' => ['class' => 'form-control', 'id' => 'newMessageText']])->textarea(); ?>
             <?php echo \humhub\widgets\MarkdownEditor::widget(['fieldId' => 'newMessageText']); ?>
             <?php echo $form->error($model, 'content'); ?>
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <?php echo $form->checkBox($model, 'reset'); ?> <?php echo $model->getAttributeLabel('reset'); ?>
                </label>
            </div>
        </div>

        <hr>

        <?php echo Html::submitButton(Yii::t('PrivacyboxModule.views_admin_index', 'Save'), ['class' => 'btn btn-primary', 'data-ui-loader' => '']); ?>
        <a class="btn btn-default" href="<?php echo Url::to(['/admin/module']); ?>"><?php echo Yii::t('PrivacyboxModule.views_admin_index', 'Back to modules'); ?></a>

        <?php ActiveForm::end(); ?>
    </div>
</div>
