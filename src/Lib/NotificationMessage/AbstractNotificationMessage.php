<?php


namespace Notification\Lib\NotificationMessage;

use Notification\Lib\NotificationMessage\Interfaces\NotificationMessageInterface;
use Notification\Lib\NotificationMessage\Traits\MessageTrait;
use Notification\Lib\NotificationMessage\Traits\ToTrait;

abstract class AbstractNotificationMessage implements NotificationMessageInterface
{

    use ToTrait,
        MessageTrait;

    /**
     * @return string
     */
    abstract public function getNotificationDevice(): string;

}