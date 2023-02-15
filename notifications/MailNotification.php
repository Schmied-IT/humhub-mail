<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 *
 */

namespace humhub\modules\mail\notifications;

use humhub\modules\mail\models\MessageEntry;
use humhub\modules\notification\components\BaseNotification;

class MailNotification extends BaseNotification
{
    public $moduleId = "mail";
    public $viewName = "mailNotification";

    public function category()
    {
        return new MailNotificationCategory();
    }

    public function html()
    {
        /** @var MessageEntry $source */
        $source = $this->source;

        /** @var User $user */
        $user = $source->getUser()->one();
        return "<b>#{$source->message->title} ({$user->getDisplayName()}):</b> {$source->content}";
    }
}
