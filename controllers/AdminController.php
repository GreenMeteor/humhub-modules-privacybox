<?php

namespace humhub\modules\privacybox\controllers;

use Yii;
use yii\helpers\Url;
use humhub\modules\admin\components\Controller;

class AdminController extends Controller
{

    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex()
    {
        $form = new \humhub\modules\privacybox\models\forms\EditForm();

        if ($form->load(Yii::$app->request->post()) && $form->validate() && $form->save()) {
            return $this->redirect(Url::to(['/privacybox/admin/index']));
        }

        return $this->render('index', ['model' => $form]);
    }

}

?>
