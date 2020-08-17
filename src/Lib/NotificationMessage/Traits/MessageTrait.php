<?php


namespace Notification\Lib\NotificationMessage\Traits;

/**
 * Trait MessageTrait
 * @package Notification\Lib\NotificationMessage\Traits
 */
trait MessageTrait
{

    /**
     * @var string
     */
    protected $message;

    /**
     * @param string $message
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

}