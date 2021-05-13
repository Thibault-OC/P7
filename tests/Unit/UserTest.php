<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Entity\User;
use App\Entity\Utilisateur;
use PHPUnit\Framework\TestCase;

Class UserTest extends TestCase
{

    protected function setUp() :void
    {
        parent::setUp();

        $this->user = new User();
    }
    public function testGetEmail() : void
    {
        $value = "test@test.fr";

        $response = $this->user->setEmail($value);


        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value ,$this->user->getEmail());
        self::assertEquals($value ,$this->user->getUsername());

    }

    public function testGetRoles() : void
    {

        $value = ['ROLE_ADMIN'];

        $response = $this->user->setRoles($value);

        self::assertInstanceOf(User::class, $response);

        self::assertContains('ROLE_USER' ,$this->user->getRoles());
        self::assertContains('ROLE_ADMIN' ,$this->user->getRoles());


    }

    public function testGetPassword() : void
    {

        $value = "password";

        $response = $this->user->setPassword($value);

        self::assertInstanceOf(User::class, $response);

        self::assertEquals($value ,$this->user->getPassword());


    }

    public function testGetUtilisateur() : void
    {

        $value = new Utilisateur();

        $response = $this->user->addUtilisateur($value);

        self::assertInstanceOf(User::class, $response);

        self::assertCount(1 ,$this->user->getUtilisateurs());
        self::assertTrue($this->user->getUtilisateurs()->contains($value));

        $response = $this->user->removeUtilisateur($value);

        self::assertInstanceOf(User::class, $response);

        self::assertCount(0 ,$this->user->getUtilisateurs());
        self::assertFalse($this->user->getUtilisateurs()->contains($value));



    }


}