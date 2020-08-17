<?php


namespace Notification\Lib\NotificationMessage\Interfaces;

/**
 * Interface NotificationMessageSoundInterface
 * @package Notification\Lib\NotificationMessage\Interfaces
 */
interface NotificationMessageSoundInterface
{

    /**
     * Get Sound of notification
     * @return string
     */
    public function getSound(): string;

}