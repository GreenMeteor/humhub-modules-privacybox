<?php

namespace humhub\modules\privacybox\widgets;

use humhub\modules\privacybox\models\forms\EditForm;

/**
 * Will injected a terms and condition box to the layout
 *
 * @package humhub.modules.breakingnews.widgets
 * @since 0.5
 * @author Luke
 */
class PrivacyboxModal extends \humhub\components\Widget
{

    /**
     * Executes the widgets
     */
    public function run()
    {
        $privacyboxForm = new EditForm();

        return $this->render('privacyboxModal', [
            'title' => $privacyboxForm->title,
            'content' => $privacyboxForm->content,
            'statement' => $privacyboxForm->statement
        ]);
    }

}

?>
