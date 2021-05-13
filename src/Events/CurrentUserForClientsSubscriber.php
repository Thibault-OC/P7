<?php

declare(strict_types=1);

namespace App\Events;

use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\Utilisateur;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Security;

class CurrentUserForClientsSubscriber implements EventSubscriberInterface
{
    private  $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['currentUserForClients', EventPriorities::PRE_VALIDATE],
        ];
    }

    public function currentUserForClients (ViewEvent $event): void
    {
        $utilisateur = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if ($utilisateur instanceof Utilisateur && Request::METHOD_POST === $method) {
            $utilisateur->setClient($this->security->getUser());
        }

    }
}
