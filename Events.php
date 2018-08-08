<?php

namespace humhub\modules\soundcloud;

use Yii;
use yii\helpers\Url;
use humhub\modules\soundcloud\widgets\SoundcloudFrame;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('SoundcloudModule.base', 'Soundcloud Settings'),
            'url' => Url::toRoute('/soundcloud/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-soundcloud"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'soundcloud' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addSoundcloudFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(SoundcloudFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'soundcloud')
        ]);
    }
}
