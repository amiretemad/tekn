<?php


namespace Notification\Lib\NotificationMessage\Interfaces;

/**
 * Interface NotificationMessageInterface
 * @package Notification\Lib\NotificationMessage\Interfaces
 */
interface NotificationMessageInterface extends NotificationMessageDeviceInterface
{

    /**
     * Getting To of Notification
     * @return string
     */
    public function getTo(): string;

    /**
     * Getting Message of Notification
     * @return string
     */
    public function getMessage(): string;

}