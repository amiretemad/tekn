<?php


namespace Notification\Lib\NotificationMessage;

use Notification\Lib\Notification\NotificationDeviceType;
use Notification\Lib\NotificationMessage\Interfaces\NotificationMessageSoundInterface;

class IOSNotificationMessage extends AbstractNotificationMessage implements NotificationMessageSoundInterface
{

    protected $sound = 'default';

    /**
     * @return string
     */
    public function getNotificationDevice(): string
    {
        return NotificationDeviceType::IOS;
    }

    /**
     * @return string
     */
    public function getSound(): string
    {
        return $this->sound;
    }

    /**
     * Set notification Sound
     * @param string $sound
     */
    public function setSound(string $sound)
    {
        $this->sound = $sound;
    }
}