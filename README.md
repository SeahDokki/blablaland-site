# Blablaland c'est quoi ?
Blablaland est un jeu de plateforme sur navigateur créé et édité par l'ex société Niveau99.

[En savoir plus (vidéo)](https://www.youtube.com/watch?v=iqWJbPHAvNQ)
# Le Projet
Ce projet est un fork du site de Blablaland.eu corrigé et mis à la disposition de tous gratuitement et en open source.
Le but étant que tout le monde puisse créer son propre blablaland rapidement et facilement.

N'hésitez pas à contribuer au projet si vous rencontrez des bugs
- Faites remonter les bugs en créant de issues sur ce repos
- Participer au projet en créant vos propre pull request

# Installation
Avant de commencer l'installation vous aurez besoin d'un certain nombre de dépendences à installer
- [Git](https://git-scm.com/downloads)
- [PHP 8.2^](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://dev.mysql.com/downloads/installer/)
- [Node.JS & NPM](https://nodejs.org/en/download/prebuilt-installer/current)
- (optionel) [Visual Studio Code](https://code.visualstudio.com/download)
- (optionel) [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)

  _Pensez à ajouter PHP aux variables d'environnement_
## Configuration
Vous aurez besoin d'activer certaines extensions de PHP, rendez vous dans le dossier d'installation de php, et chercher le fichier `php.ini`
Ouvrez le avec un editeur de code et supprimez les ";" devant les lignes suivantes
```
extension=curl
extension=fileinfo
extension=mbstring
extension=mysqli
extension=openssl
extension=pdo_mysql
extension=sockets
extension=zip
```
## Mise en place du projet

Créez un nouveau dossier et ouvrez un terminal à l'interieur
```
git clone https://github.com/SeahDokki/blablaland-site.git
```

A la racine du projet, installez les dépendences
```
composer install
```
```
npm install
```
Et faite un build des fichiers JS et SCSS
```
npm run dev
```

Jouez les migrations pour créer la base de données et les tables
```
php artisan migrate
```
Insérez les données par défaut nécessaire au fonctionnement de Blablaland
```
php artisan db:seed
```

Toujours à la racine du projet, renommez le fichier `.env.example` ent `.env`
Ouvrez ce fichier et renseignez les informations relative à la base de données

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blablaland
DB_USERNAME=VOTRE_USERNAME_BDD
DB_PASSWORD=VOTRE_MOT_DE_PASSE
```

Ensuite vous pouvez lancer le site en mode `dev`
```
php artisan serve
```

il seras accessible à l'adresse suivante http://localhost:8000/

# Pour installer le serveur, rendez-vous sur [ce depot github](https://github.com/SeahDokki/blablaland-serveur)

