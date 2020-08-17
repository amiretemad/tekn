<?php

include 'bootstrap.php';

use Notification\Lib\NotificationMessage\AndroidNotificationMessage;
use Notification\Lib\NotificationMessage\IOSNotificationMessage;
use Notification\Lib\NotificationSend\SendAndroidNotification;
use Notification\Lib\NotificationSend\SendIOSNotification;
use Notification\Lib\NotificationSend\NotificationSendStrategyDetector;

$androidMessage = new AndroidNotificationMessage();
$androidMessage->setMessage('Hello Android :)');
$androidMessage->setTo('amiretemad\'s Android cellphone');

$iosMessage = new IOSNotificationMessage();
$iosMessage->setMessage('Hello IOS :) ');
$iosMessage->setTo('amiretemad\'s IOS Phone');


// I have 2 strategy at this moment for sending notifications Andorid and IOS,
// when third strategy comes in I can easily add it here :)
$sendStrategies = [new SendAndroidNotification(),new SendIOSNotification()];
$strategy = new NotificationSendStrategyDetector();
$strategy->setNotificationChannels($sendStrategies);
$strategy->send($iosMessage);
$strategy->send($androidMessage);