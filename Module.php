<?php

namespace humhub\modules\privacybox;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
     * On Init of Dashboard Sidebar, add the widget
     *
     * @param type $event
     */
    public static function onLayoutAddonsInit($event)
    {
        if (self::showPrivacybox()) {
            $event->sender->addWidget(widgets\PrivacyboxModal::className(), [], ['sortOrder' => 99999]);
        }
    }

    public static function showPrivacybox()
    {
        $settings = Yii::$app->getModule('privacybox')->settings;
        if(Yii::$app->user->isGuest || !$settings->get('active')) {
            return false;
        }

        $lastSeenTS = $settings->user()->get('timestamp');
        $currentTermsTS = $settings->get('timestamp');

        return $currentTermsTS != null && $lastSeenTS != $currentTermsTS;
    }


    public function getConfigUrl()
    {
        return Url::to(['/privacybox/admin/index']);
    }

}
