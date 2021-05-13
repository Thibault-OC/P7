<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Entity\Mobile;
use PHPUnit\Framework\TestCase;

Class MobileTest extends TestCase
{

    protected function setUp() :void
    {
        parent::setUp();

        $this->mobile = new Mobile();
    }

    public function testGetName() : void
    {
        $value = "iphone test";

        $response = $this->mobile->setName($value);


        self::assertInstanceOf(Mobile::class, $response);
        self::assertEquals($value ,$this->mobile->getName());


    }

    public function testGetPrix() : void
    {
        $value = 122;

        $response = $this->mobile->setPrix($value);


        self::assertInstanceOf(Mobile::class, $response);
        self::assertEquals($value ,$this->mobile->getPrix());


    }

    public function testGetContent() : void
    {
        $value = "Contenu test mobile";

        $response = $this->mobile->setContent($value);


        self::assertInstanceOf(Mobile::class, $response);
        self::assertEquals($value ,$this->mobile->getContent());


    }




}