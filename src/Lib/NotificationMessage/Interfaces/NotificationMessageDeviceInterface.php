<?php


namespace Notification\Lib\NotificationMessage\Interfaces;

/**
 * Interface NotificationMessageDeviceInterface
 * @package Notification\Lib\NotificationMessage\Interfaces
 */
interface NotificationMessageDeviceInterface
{

    /**
     * Getting To of Notification
     * @return string
     */
    public function getNotificationDevice(): string;

}