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

    // routes vérifications d'accès

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

        //Vérification si le client est un admin

        $hasAccess = in_array('ROLE_ADMIN', $this->user->getRoles());

        if($hasAccess == false){

           if( $userCurrent instanceof User){

                // Si le client accède à une ressource qui ne lui appartient pas affiche un message d'erreur

                if($this->checkMethod($method) && $userCurrent->getID() !== $this->user->getId()){
                    $error = "impossible de modifier un autre User";
                    throw new UnauthorizedHttpException($error , $error);
                }
            }
            if( $userCurrent instanceof Utilisateur){

                // Si le client accède à une ressource qui ne lui appartient pas affiche un message d'erreur

                if($this->checkMethod($method) && $userCurrent->getClient()->getID() !== $this->user->getId()){
                    $error = "impossible de modifier un autre utilisateur";
                    throw new UnauthorizedHttpException($error , $error);
                }
            }

        }

    }

    public function isAuthenticated(): void
    {

        // Si le client n'est pas connecté

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
