<?php


namespace Notification\Lib\NotificationMessage;


use Notification\Lib\Notification\NotificationDeviceType;

 class AndroidNotificationMessage extends AbstractNotificationMessage
{

    /**
     * @return string
     */
    public function getNotificationDevice(): string
    {
        return NotificationDeviceType::ANDROID;
    }

 }