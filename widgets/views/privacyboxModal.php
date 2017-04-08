<?php

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;

\humhub\modules\privacybox\Assets::register($this);
?>

<div class="modal" id="privacyboxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="myModalLabel" class="modal-title"><?= Html::encode($title) ?></h4>
            </div>
            <div class="modal-body">
                <p class='help-block'><?= Html::encode($statement) ?></p>
                <div class="privacybox-body">
                    <?= humhub\widgets\MarkdownView::widget(['markdown' => $content]); ?>
                </div>
            </div>
            <div class="modal-footer">
                <a id="privacybox-accept" class="btn btn-success" data-ui-loader><?= Yii::t('PrivacyboxModule.widgets_views_privacyboxModal', 'Accept'); ?></a>
                <a class="btn btn-danger" href="<?= Url::to(['/privacybox/index/decline']); ?>" data-ui-loader><?= Yii::t('PrivacyboxModule.widgets_views_privacyboxModal', 'Decline'); ?></a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function () {

        $('#privacyboxModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });

    });

    $('#privacybox-accept').on('click', function() {
        $.ajax({
            url: '<?= Url::to(['/privacybox/index/accept']) ?>',
            success: function() {
                $('#privacyboxModal').modal('hide');
            }
        });
    });

</script>
