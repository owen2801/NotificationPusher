<?php

namespace Sly\NotificationPusher\Model;

use Sly\NotificationPusher\Model\MessageInterface;

class Message implements MessageInterface
{
    protected $status;
    protected $message;
    protected $hasAlert;
    protected $hasSound;
    protected $hasBadge;
    protected $createdAt;
    protected $sentAt;

    /**
     * __construct method.
     */
    public function __construct($message = null)
    {
        $this->status    = MessageInterface::STATUS_INIT;
        $this->message   = $message;
        $this->createdAt = new \DateTime();
    }

    /**
     * __toString method.
     * 
     * @return string
     */
    public function __toString()
    {
        return $this->message;
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        return $this->message;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function getHasAlert()
    {
        return $this->hasAlert;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setHasAlert($hasAlert)
    {
        $this->hasAlert = $hasAlert;
    }

    /**
     * {@inheritdoc}
     */
    public function getHasBadge()
    {
        return $this->hasBadge;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setHasBadge($hasBadge)
    {
        $this->hasBadge = $hasBadge;
    }

    /**
     * {@inheritdoc}
     */
    public function getHasSound()
    {
        return $this->hasSound;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setHasSound($hasSound)
    {
        $this->hasSound = $hasSound;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getSentAt()
    {
        return $this->sentAt;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setSentAt(\DateTime $sentAt)
    {
        $this->sentAt = $sentAt;
    }
}
