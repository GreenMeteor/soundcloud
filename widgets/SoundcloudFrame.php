<?php

namespace humhub\modules\soundcloud\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;

/**
 *
 * @author Felli
 */
class SoundcloudFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
   public function run()
    {
        $url = Yii::$app->getModule('soundcloud')->getServerUrl() . '/player/?url=https%3A//api.soundcloud.com';
        return $this->render('soundcloudframe', ['soundcloudUrl' => $url]);
    }
}
