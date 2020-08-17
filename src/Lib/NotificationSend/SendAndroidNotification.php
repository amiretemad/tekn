<?php

namespace Notification\Lib\NotificationSend;

use Notification\Lib\Notification\NotificationDeviceType;
use Notification\Lib\NotificationMessage\Interfaces\NotificationMessageInterface;
use Notification\Lib\NotificationSend\Interfaces\NotificationSendChannel;

class SendAndroidNotification implements NotificationSendChannel
{

    /**
     * @param NotificationMessageInterface $message
     * @return bool
     */
    public function send(NotificationMessageInterface $message): bool
    {
        echo sprintf('Message : %s  To : %s has been sent successfully.',$message->getMessage(),$message->getTo());

        return true;
    }

    /**
     * @param NotificationMessageInterface $message
     * @return bool
     */
    public function isProcessable(NotificationMessageInterface $message): bool
    {
        // TODO we could control the length of the message and throw exception for large message
        // TODO we could add another control here

        // I controlled just type of device here
        return $message->getNotificationDevice() === NotificationDeviceType::ANDROID;
    }
}