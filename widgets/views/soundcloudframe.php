<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\soundcloud\Assets::register($this);
?>

<div class="panel panel-default panel-discordapp" id="panel-soundcloud">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-soundcloud']); ?>
  <div class="panel-heading">
    <?=Yii::t('SoundcloudModule.base', '<strong>Soundcloud</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<iframe width="100%" height="450" scrolling="no" frameborder="no" src="<?= $soundcloudUrl ?>"></iframe>
<?= Html::endTag('div'); ?>
</div>
</div>
