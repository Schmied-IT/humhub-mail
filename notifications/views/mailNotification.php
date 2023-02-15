<?php

/* @var $this yii\web\View */
/* @var $viewable humhub\modules\mail\notifications\MailNotification */

/* @var $source \humhub\modules\mail\models\MessageEntry */
/* @var $userMessage \humhub\modules\mail\models\UserMessage */

use humhub\modules\mail\models\UserMessage;
use humhub\modules\mail\widgets\InboxMessagePreview;

$source = $viewable->source;
$userMessage = UserMessage::find()
    ->where(['message_id' => $source->message_id, 'user_id' => Yii::$app->user->id])
    ->one();
Yii::warning("U2 " . print_r($userMessage, true));

echo InboxMessagePreview::widget(['userMessage' => $userMessage]);
//echo "fooBar {$source->id}<br>";
