<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UsersFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $users = [
            1=>[
                'email' => 'admin@gmail.com',
                'password' => '$2y$13$g7i3W/D8yb8M1mcUTvYvue02DIAXpUz2zhdz.H5EDreTq3IyStiaK',

            ],
            2=>[
                'email' => 'antoine@gmail.com',
                'password' => '$2y$13$g7i3W/D8yb8M1mcUTvYvue02DIAXpUz2zhdz.H5EDreTq3IyStiaK',
            ],
            3=>[
                'email' => 'didier@gmail.com',
                'password' => '$2y$13$g7i3W/D8yb8M1mcUTvYvue02DIAXpUz2zhdz.H5EDreTq3IyStiaK',
            ],
            4=>[
                'email' => 'sylvain@gmail.com',
                'password' => '$2y$13$g7i3W/D8yb8M1mcUTvYvue02DIAXpUz2zhdz.H5EDreTq3IyStiaK',
            ],
            5=>[
                'email' => 'pierre@gmail.com',
                'password' => '$2y$13$g7i3W/D8yb8M1mcUTvYvue02DIAXpUz2zhdz.H5EDreTq3IyStiaK',
            ],
            6=>[
                'email' => 'claude@gmail.com',
                'password' => '$2y$13$g7i3W/D8yb8M1mcUTvYvue02DIAXpUz2zhdz.H5EDreTq3IyStiaK',
            ],
            7=>[
                'email' => 'logan@gmail.com',
                'password' => '$2y$13$g7i3W/D8yb8M1mcUTvYvue02DIAXpUz2zhdz.H5EDreTq3IyStiaK',
            ],
        ];



        foreach($users as $key=> $value){
            $user = new User();
            $user->setEmail($value['email']);
            $user->setPassword($value['password']);
            $manager->persist($user);

            $this->addReference('user_'. $key, $user);
        }


        $manager->flush();
    }
}
