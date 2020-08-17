<?php


namespace Notification\Lib\NotificationSend;

use Notification\Lib\NotificationMessage\Interfaces\NotificationMessageInterface;
use Notification\Lib\NotificationSend\Interfaces\NotificationSendChannel;

class NotificationSendStrategyDetector
{

    /**
     * @var NotificationSendChannel[]
     */
    protected $notificationChannels = [];

    /**
     * @return NotificationSendChannel[]
     */
    public function getNotificationChannels(): array
    {
        return $this->notificationChannels;
    }

    /**
     * @param NotificationSendChannel[] $notificationChannels
     */
    public function setNotificationChannels(array $notificationChannels): void
    {
        $this->notificationChannels = $notificationChannels;
    }

    /**
     * Sending Message
     * @param NotificationMessageInterface $notificationMessage
     */
    public function send(NotificationMessageInterface $notificationMessage): void
    {
        foreach ($this->getNotificationChannels() as $notificationChannel) {
            if ($notificationChannel->isProcessable($notificationMessage)) {
                $notificationChannel->send($notificationMessage);
                return;
            }
        }
    }

}