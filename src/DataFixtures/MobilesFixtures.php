<?php

namespace App\DataFixtures;

use App\Entity\Mobile;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MobilesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $mobiles = [
            1=>[
                'name' => 'Samsung Galaxy S21',
                'prix' => '1021',
                'content' => 'Le Samsung Galaxy S21 Ultra est l\'un des meilleurs smartphones passés dans nos laboratoires. Sa dalle s\'avère de qualité exceptionnelle, ses performances sont compétitives, ses photos de jour très bonnes, et ce S21 Ultra s\'avère finalement complet et satisfera tous les besoins. En proposant la compatibilité avec le S-Pen, ce nouveau fleuron devient plus polyvalent que jamais et se rapproche encore de la gamme des Galaxy Note. De quoi interroger une nouvelle fois sur la pertinence de cette dernière.',

            ],
            2=>[
                'name' => 'Apple iPhone 12 Pro Max',
                'prix' => '1106',
                'content' => 'Avec son écran bien plus grand, une batterie bien plus dodue et des capacités photo supérieures, l\'iPhone 12 Pro Max se pose comme le smartphone d\'Apple ultime. À tel point qu\'il vient occulter l\'iPhone 12 Pro. Finalement, si vous deviez choisir un modèle “pro” cette année, il serait plus sage d\'envisager de vous procurer un Pro Max pour tirer profit de tout ce qu\'offre Cupertino avec ses modèles 2020, sauf si un smartphone à la taille démesurée vous rebute.',
            ],
            3=>[
                'name' => 'Apple iPhone 12 Pro',
                'prix' => '1085',
                'content' => 'L\'iPhone 12 Pro est une bonne évolution du précédent modèle. C\'est un smartphone complet, avec un très bon écran, des performances solides et durables ainsi que des appareils photo polyvalents. L\'ajout de la 5G, bien qu\'encore indisponible en France, lui assure une certaine longévité auprès des consommateurs — même si l\'autonomie risque d\'en pâtir. Pour l\'heure, l\'iPhone 12 est très autonome et coche quasiment toutes les cases du smartphone parfait.',
            ],
            4=>[
                'name' => 'Samsung Galaxy S20 Ultra',
                'prix' => '794',
                'content' => 'Comme chaque fois avec le nouveau haut de gamme de Samsung, nous n\'avons pas grand-chose à reprocher à ce Galaxy S20 Ultra. Le fleuron coréen de ce début de décennie collectionne les cinq étoiles pour un sans-faute mérité. Il remplit sans complexe sa mission de vitrine technologique et se présente comme le meilleur des smartphones passés dans notre laboratoire. Pour faire simple, quel que soit l\'usage voulu par l\'utilisateur, cet S20 Ultra fera l\'affaire. À tel point, qu\'il se permet même d\'intégrer une puce 5G afin d\'anticiper la nouvelle génération de réseau mobile.',
            ],
            5=>[
                'name' => 'Xiaomi Mi 10 Pro',
                'prix' => '739',
                'content' => 'Ça y est, Xiaomi est un constructeur comme les autres. Avec son Mi 10 Pro, l\'entreprise connue pour son rapport qualité/prix agressif propose un mobile à 1 000 €. Il se révèle assurément complet, avec sa dalle Oled parfaitement calibrée, son autonomie solide et ses performances de champion. Il conviendra également aux amateurs de photo avec son module de 108 Mpx. Finalement, il s\'agit d\'une belle alternative sous Android aux Google Pixel 4 XL et Galaxy S20+. En attendant que Huawei règle ses différends avec les États-Unis.',
            ],
            6=>[
                'name' => 'OnePlus 8 Pro',
                'prix' => '699',
                'content' => 'Comme souvent, OnePlus empile avec succès des technologies de pointe, pour nous délivrer un OnePlus 8 Pro très réussi. Dommage que le fleuron chinois ne fasse pas un peu mieux en photo. Il reste en léger retrait par rapport à un cador comme le Samsung Galaxy S20 Ultra, certes bien plus cher. Ce OnePlus 8 Pro reste une preuve que le fabricant chinois est capable de rivaliser sur le segment des smartphones haut de gamme.',
            ],
            7=>[
                'name' => 'Xiaomi Mi 10',
                'prix' => '598',
                'content' => 'La recette du Xiaomi Mi 10 fonctionne très bien dans l\'ensemble. Le fabricant chinois nous propose un mobile résolument haut de gamme dans son approche, qui n\'a que peu de défauts. Il rivalise sans mal avec les Samsung Galaxy S20 ou autre OnePlus 7T Pro. Difficile en revanche de comprendre l\'envolée du prix de vente par rapport à un Mi 9 qui excellait lui aussi pour 300 € de moins à son lancement.',
            ],
            8=>[
                'name' => 'OnePlus 8',
                'prix' => '475',
                'content' => 'Au même titre que le OnePlus 8 Pro, ce OnePlus 8 est un smartphone réussi. Une preuve que la marque sait se renouveler et proposer de nouvelles choses à chaque version. Malheureusement, la firme chinoise offre toujours un résultat en photo bien en deçà de la concurrence directe, notamment le Xiaomi Mi Note 10.',
            ],
            9=>[
                'name' => 'Xiaomi Mi 10T Pro',
                'prix' => '396',
                'content' => 'Le Mi 10T Pro se pose facilement en tant que digne successeur du Mi 9T Pro. Nous regrettons simplement l\'abandon d\'une dalle Oled au profit d\'une LCD à 144 Hz, d\'un processeur haut de gamme ainsi que du téléobjectif — ce qu\'offrait son prédécesseur. Ce Mi 10T Pro est donc un très bon smartphone, presque excellent. Il reste un bon moyen de mettre un pied dans la 5G. Son module principal n\'est pas excellent, mais n\'en est pas loin et, même si la dalle n\'est "que LCD", il faut reconnaître ses qualités. Le Mi 10T Pro tient bien sa place face au Google Pixel 5, un sérieux concurrent, surtout sur le volet photo.',
            ],
            10=>[
                'name' => 'Samsung Galaxy A42 5G',
                'prix' => '278',
                'content' => 'Le Samsung Galaxy A42 5G est une belle surprise que nous n\'attendions pas forcément. Ses atouts lui permettent de se démarquer sur le marché du milieu de gamme et surtout face à ses principaux concurrents (en particulier le Realme X50 5G). Sa dalle Amoled est l\'une des meilleures chez Samsung, tout comme son énorme autonomie de presque 26 heures. En optant pour un processeur Snapdragon, la firme coréenne fait là un très bon choix, offrant à cet A42 de très bonnes performances et, surtout, la compatibilité 5G à moindre coût.',
            ],
            11=>[
                'name' => 'Xiaomi Mi 10 Lite 5G',
                'prix' => '285',
                'content' => 'Après des Mi 10 et Mi 10 Pro réussis, Xiaomi poursuit sur sa lancée avec un Mi 10 Lite 5G à moindre prix et aux performances générales très bonnes. Le mobile propose en outre une excellente endurance, un écran très bien calibré, et des performances convaincantes. Il est toutefois moins emballant que les autres terminaux de sa fratrie côté photographie, d\'autant qu\'il est possible de trouver mieux sur le marché à tarif équivalent, comme le Realme X2 Pro dans sa version de base.',
            ],
            12=>[
                'name' => 'Xiaomi Redmi Note 9T 5G',
                'prix' => '190',
                'content' => 'Sans démériter, cette nouvelle déclinaison du Redmi Note 9 se place un cran en dessous du Redmi Note 9 Pro. L\'achat de ce Note 9T se justifiera principalement par sa compatibilité 5G. Un argument à prendre en compte lors de l\'achat, surtout si vous envisagez de passer prochainement à un forfait 5G, ou si vous comptez conserver votre smartphone assez longtemps.',
            ],
        ];



        foreach($mobiles as $key=> $value){
            $mobile = new Mobile();
            $mobile->setName($value['name']);
            $mobile->setPrix($value['prix']);
            $mobile->setContent($value['content']);
            $manager->persist($mobile);

            //$this->addReference('mobile_'. $key, $mobile);
        }


        $manager->flush();
    }
}
