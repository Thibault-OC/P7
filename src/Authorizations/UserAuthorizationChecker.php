<?php

declare(strict_types=1);

namespace App\Authorizations;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;


class UserAuthorizationChecker
{
    private $methodAllowed = [
        Request::METHOD_GET,
        Request::METHOD_POST,
        Request::METHOD_PUT,
        Request::METHOD_PATCH,
        Request::METHOD_DELETE
    ];

    private $user;

    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }

    public function Check (UserInterface $user, string $method)
    {
        $this->isAuthenticated();

        if($this->checkMethod($method) && $user->getID() !== $this->user->getId()){

            $error = "impossible de modifier un autre utilisateur";
            throw new UnauthorizedHttpException($error , $error);
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
        return in_array($method, $this->methodAllowed , true);
    }
}
