<h1> API BileMo </h1>




<h2>Technologies utilisées</h2>

<p>Symfony : 5.1.11</p>
<p>PHP : 7.3.23</p>
<p>OpenSSL</p>

<h2>Codacy</h2>

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/c741d7786baf4bf2885193e024cdaf15)](https://www.codacy.com/gh/Thibault-OC/P7/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Thibault-OC/P7&amp;utm_campaign=Badge_Grade)

<h2>Installation avec git</h2>

<ul>
    <li>Utiliser la ligne de commande git git clone <code>https://github.com/Thibault-OC/P7.git</code></li>
    <li>Déplacez-vous dans le dossier du projet avec la commande <code>cd P7</code></li>
    <li>Pour une utilisation optimale du projet installé composer <code>composer install</code></li>
</ul>

<h3>Modifier le fichier .env :</h3>

<ul>
<li>Ajouter les identifiants et mots de passe de la base de donnée <code>DATABASE_URL="mysql://[utilisateur]:[mot de passe]@127.0.0.1:3306/[Nom de la base de données]?serverVersion=5.7"</code></li>
</ul>

<h3>Création base de données </h3>

<ul>
<li>Création de la base de données <code>php bin/console doctrine:database:create</code></li>
<li>Création des tables de la base de données<code> php bin/console doctrine:migrations:migrate</code></li>
<li>Insertion des données de test<code> php bin/console doctrine:fixtures:load</code></li>
</ul>

<h3>JWT configuration</h3>
<p>Pour utiliser JWT la création de clefs est nécessaire</p>
<p>JWT_PASSPHRASE est disponible dans le fichier .env du projet</p>
<code>mkdir config/jwt<br>
openssl genrsa -out config/jwt/private.pem -aes256 4096<br>
openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem<br>
</code>
