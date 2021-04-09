<?php

declare(strict_types=1);

namespace App\Events;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\User;
use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class UserMethodSubscriber implements EventSubscriberInterface
{
    private  $security;

    private $user;

    private $methodNotAllowed = [
        Request::METHOD_GET,
        Request::METHOD_PUT,
        Request::METHOD_PATCH,
        Request::METHOD_DELETE
    ];

    public function __construct(Security $security)
    {
        $this->security = $security;
        $this->user = $security->getUser();

    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['currentUser', EventPriorities::PRE_VALIDATE],
        ];
    }

    public function currentUser (ViewEvent $event): void
    {
        $method = $event->getRequest()->getMethod();

        $userCurrent = $event->getControllerResult();

       if( $userCurrent instanceof User){
           if($this->checkMethod($method) && $userCurrent->getID() !== $this->user->getId()){
               $error = "impossible de modifier un autre User";
               throw new UnauthorizedHttpException($error , $error);
           }
       }
        if( $userCurrent instanceof Utilisateur){
            if($this->checkMethod($method) && $userCurrent->getClient()->getID() !== $this->user->getId()){
                $error = "impossible de modifier un autre utilisateur";
                throw new UnauthorizedHttpException($error , $error);
            }
        }



    }

    public function isAuthenticated(): void
    {
        if (null === $this->user) {
            $error = "you are not athentificated";
            throw new  UnauthorizedHttpException($error , $error );
        }
    }

    public function checkMethod(string $method)
    {
        return in_array($method, $this->methodNotAllowed  , true);
    }
}
