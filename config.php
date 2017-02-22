<?php

use \humhub\widgets\LayoutAddons;

return [
    'id' => 'privacybox',
    'class' => 'humhub\modules\privacybox\Module',
    'namespace' => 'humhub\modules\privacybox',
    'events' => [
        ['class' => LayoutAddons::className(), 'event' => LayoutAddons::EVENT_INIT, 'callback' => ['humhub\modules\privacybox\Module', 'onLayoutAddonsInit']],
    ],
];
?>
