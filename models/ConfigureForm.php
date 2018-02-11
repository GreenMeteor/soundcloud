<?php

namespace humhub\modules\soundcloud\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.

 */
class ConfigureForm extends \yii\base\Model
{

    public $serverUrl;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('SoundcloudModule.base', 'Soundcloud URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('SoundcloudModule.base', 'e.g https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/{track-id}&amp;'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('soundcloud')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('soundcloud')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
