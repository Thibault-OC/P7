<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class UtilisateursFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');


        for($nbUtilisateur = 1; $nbUtilisateur <= 200; $nbUtilisateur++){

            $user = $this->getReference('user_'. $faker->numberBetween(1, 7));


            $utilisateur = new Utilisateur();

            $utilisateur->setClient($user);


            $utilisateur->setEmail($faker->email);
            $utilisateur->setFirstname($faker->firstname);
            $utilisateur->setLastname($faker->lastname);



            $manager->persist($utilisateur);


        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UsersFixtures::class
        ];
    }
}