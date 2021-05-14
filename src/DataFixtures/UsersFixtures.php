<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersFixtures extends Fixture
{

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {


        $users = [
            1=>[
                'email' => 'admin@gmail.com',
                'password' => 'password',
                'roles' => ['ROLE_ADMIN'],
            ],
            2=>[
                'email' => 'antoine@gmail.com',
                'password' => 'password',
                'roles' => [],
            ],
            3=>[
                'email' => 'didier@gmail.com',
                'password' => 'password',
                'roles' => [],
            ],
            4=>[
                'email' => 'sylvain@gmail.com',
                'password' => 'password',
                'roles' => [],
            ],
            5=>[
                'email' => 'pierre@gmail.com',
                'password' => 'password',
                'roles' => [],
            ],
            6=>[
                'email' => 'claude@gmail.com',
                'password' => 'password',
                'roles' => [],
            ],
            7=>[
                'email' => 'logan@gmail.com',
                'password' => 'password',
                'roles' => [],
            ],
        ];



        foreach($users as $key=> $value){
            $user = new User();
            $user->setEmail($value['email']);
            $user->setPassword($this->encoder->encodePassword($user, $value['password']));
            $user->setRoles($value['roles']);
            $manager->persist($user);

            $this->addReference('user_'. $key, $user);
        }


        $manager->flush();
    }
}
