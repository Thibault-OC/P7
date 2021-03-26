<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Entity\User;
use App\Entity\Utilisateur;
use PHPUnit\Framework\TestCase;

Class UtilisateurTest extends TestCase
{

    protected function setUp() :void
    {
        parent::setUp();

        $this->utilisateur = new Utilisateur();
    }

    public function testGetFirstname() : void
    {
        $value = "antoine";

        $response = $this->utilisateur->setFirstname($value);


        self::assertInstanceOf(Utilisateur::class, $response);
        self::assertEquals($value ,$this->utilisateur->getFirstname());


    }

    public function testGetLastname() : void
    {
        $value = "DELAFONTAINNE";

        $response = $this->utilisateur->setLastname($value);


        self::assertInstanceOf(Utilisateur::class, $response);
        self::assertEquals($value ,$this->utilisateur->getLastname());


    }

    public function testGetEmail() : void
    {
        $value = "test@test.fr";

        $response = $this->utilisateur->setEmail($value);


        self::assertInstanceOf(Utilisateur::class, $response);
        self::assertEquals($value ,$this->utilisateur->getEmail());


    }

    public function testGetClient() : void
    {
        $value = new User();

        $response = $this->utilisateur->setClient($value);

        self::assertInstanceOf(Utilisateur::class, $response);
        self::assertInstanceOf(User::class,$this->utilisateur->getClient());

    }


}