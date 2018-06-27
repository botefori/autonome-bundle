<?php
/**
 * Created by PhpStorm.
 * User: icamara
 * Date: 27/06/18
 * Time: 17:36
 */

namespace App\EventSubscriber;


use KnpU\LoremIpsumIbrahBundle\Event\FilterApiResponseEvent;
use KnpU\LoremIpsumIbrahBundle\Event\KnpULoremIpsumEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddMessageToIpsumApiSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
       return [
           KnpULoremIpsumEvents::FILTER_API => 'onFilterApi'
       ];
    }

    public function onFilterApi(FilterApiResponseEvent $event)
    {
        $data = $event->getData();

        $data['message'] = 'Have a magical day!';

        $event->setData($data);

    }

}