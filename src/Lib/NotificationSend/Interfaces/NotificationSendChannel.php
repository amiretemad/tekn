<?php


namespace Notification\Lib\NotificationSend\Interfaces;


use Notification\Lib\NotificationMessage\Interfaces\NotificationMessageInterface;

interface NotificationSendChannel
{

    /**
     * @param NotificationMessageInterface $message
     * @return bool
     */
    public function send(NotificationMessageInterface $message): bool;

    /**
     * @param NotificationMessageInterface $message
     * @return bool
     */
    public function isProcessable(NotificationMessageInterface $message): bool;
}