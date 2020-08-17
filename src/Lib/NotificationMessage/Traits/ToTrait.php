<?php


namespace Notification\Lib\NotificationMessage\Traits;

/**
 * Trait ToTrait
 * @package Notification\Lib\NotificationMessage\Traits
 */
trait ToTrait
{

    /**
     * @var string
     */
    protected $to;

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @param string $to
     * @return self
     */
    public function setTo(string $to): self
    {
        $this->to = $to;

        return $this;
    }

}