### Guide d’installation 

1.	Clone repository
•	git clone https://github.com/Rochelott89/TP2recettes

2.	CD (change directory) à l'emplacement de votre ordinateur désiré
•	cd path

3.	Composer installation 
•	composer install

4.	NPM installation
•	npm install
•	npm run dev

5.	Mise en place de Socialite
•	composer require laravel/jetstream
•	php artisan jetstream:install livewire
•	php artisan migrate (exécutez la commande pour migrer les propriétés d'authentification)
•	composer require laravel/socialite

Ouvrir config/app.php, ajouter si non présent : 

providers' => [
    Laravel\Socialite\SocialiteServiceProvider::class,
],
'aliases' => [
    'Socialite' => Laravel\Socialite\Facades\Socialite::class,
],


Ouvrir config/services.php, ajouter si non présent : 

return [
    
    //FACEBOOK 
    'facebook' => [
        'client_id' => '258922505929452',
        'client_secret' => 'a458ca541ad440b522453536c477b256',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    //GOOGLE
    'google' => [
        'client_id' => '698018411381-bfjls2rps0t1eaarrgolkel0fouquahd.apps.googleusercontent.com',
        'client_secret' => '0PmJRFtQXVLQqzHOHi7CNwUE',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    //GITHUB
    'github' => [
        'client_id' => 'f4b5c923f13778fcbdad',
        'client_secret' => '04c91f86aed4f3dd4e30e80610894b23d55e51fe',
        'redirect' => 'http://localhost:8000/auth/github/callback',
    ],

    //TWITTER
    'twitter' => [
        'client_id' => '78um5gkt',
        'client_secret' => 'jTmV01E8xtwC',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    //LINKEDIN
    'linkedin' => [
        'client_id' => '786gdq6tz4v153',
        'client_secret' => 'c5KrgAECDjsx38k2',
        'redirect' => 'http://localhost:8000/auth/linkedin/callback',
    ],

6.	Générer une clé de chiffrement d'application
•	php artisan key:generate

7.	Création BD
•	Regarder dans le projet que le fichier database.db est créé dans le dossier database, sinon le créer manuellement.

8.	Modifier fichier .env pour que Laravel puisse se connecter avec la BD
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost


DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
DB_DATABASE=C:\Users\cesar\Documents\MIASHS\ProgWeb2\TP2Laravel\TP2Laravel\database\database.db
#username et password pas necessaire pour sqlite
#DB_USERNAME=root
#DB_PASSWORD=ic2a

*DB_DATABASE = avec votre chemin pour le fichier database.db

9.	Migration de la BD
•	php artisan migrate

10.	Seed la BD
•	php artisan migrate:fresh --seed -v

11.	Lancer le serveur
•	php artisan serve
•	http://localhost:8000/ pour aller à l’Accueil 


### Description
la page principale de notre application est la page d’accueil qui est constituée d'un **menu principal** et aussi les titres des dernières recettes. Le Menu principal se trouve dans la plupart des autres pages de cet application et il a des éléments suivants:

| PAGE PARENT       | CONTENU                                                                                             | PAGE ENFANT/ BOUTON CLICKABLE                 | URL             |
|-------------------|-----------------------------------------------------------------------------------------------------|-----------------------------------------------|-----------------|
| ACCUEIL           | Affichage des titres de dernieres recettes                                                          | Menu principal                                | 127.0.0.1:8000/ |
| RECETTES          | Affichage titre des recettes                                                                        | Lien vers les recettes/Menu principal         | /recettes       |
| CONTACT           | Formulaire de contact a remplir                                                                     | Menu principal                                | /contact        |
| CREER UNE RECETTE | Formulaire de nouvelle recette a remplir, Affichage des recettes disponible pour une action de CRUD | Lien de retour, lien d ajout, bouton submit   | /recettesCrud   |
| SE CONNECTER      | Se logger grace aux differents types de comptes exterieurs et interieur                             | Lien vers les comptes ext‚rieurs et int‚rieur | /login          |

 

| PAGE PARENT       | INFO SUPPLEMENTAIRE SUR LE CONTENU DE PAGE                                                                          |
|-------------------|---------------------------------------------------------------------------------------------------------------------|
| CONTACT           | Les champs nom, email, sujet, et message a remplir et bouton de submit a appouyer.                                  |
| CREER UNE RECETTE | Les champs auteur de recette, titre de recette, ingredients, image, url,.. a remplir et bouton de submit a appuyer. |
| CREER UNE RECETTE | Les fonctionnalites de  modification, suppression, et ajout, et affichage des recettes disponibles(crud)            |
| SE CONNECTER      | Les comptes exterieurs de google, facebook, linkedin, github, et twitter a utiliser ou le compte interieur          |



## Le déroulement de projet
Au début pour une meilleure comprehension, on a créé des fichiers de recette en **statique** avant d'aller les chercher dans la B.D.D en dynamique.Donc dans les premiers pas les routes nous emmènent directement vers les pages Views sans passer par les contrôleurs.

![Capture1](https://user-images.githubusercontent.com/81319754/115557184-c43a5380-a2b1-11eb-9684-4e8de936273f.PNG)


On peut créer des contraintes avec **where** et les **expressions régulières**. Donc lorsque l’utilisateur veut accéder à une page recette par exemple qui a des chiffres au lieu de lettres dans son url , l’erreur 404 sera affichée. 

![Capture2](https://user-images.githubusercontent.com/81319754/115555282-9e13b400-a2af-11eb-8779-1c4505b93cc1.PNG)

Pour que notre site soit plus en plus **dynamique**, une parametre $slug a été ajouté qui remplace le nom de fichier qui était en dur:

![Capture3](https://user-images.githubusercontent.com/81319754/115555601-f945a680-a2af-11eb-96a7-7004d041623b.PNG)

Ensuite en créant les contrôleurs, on peut déplacer le code de Route dans les contrôleurs. Ici, un extrait de méthode index2() de la RecettesControllors (renommé Recettes ulterieurement) est affiché. Le chemin relatif est utilisé ici dans le répertoire Controllers:

![Capture4](https://user-images.githubusercontent.com/81319754/115556039-7ffa8380-a2b0-11eb-9606-e8b3d9561dcd.PNG)

ensuite au lieu de prendre des données de nos fichiers statiques, on fetche da la colonne url du tableau recipes de la B.D.D. :

![Capture5](https://user-images.githubusercontent.com/81319754/115556202-b506d600-a2b0-11eb-9dec-9984852b2dfb.PNG)

Il nous ne reste maintenant que de créer et d'utiliser des **Model** pour que notre conception soit un vrai **design pattern MVC**.


## Les Problèmes Rencontrés

Quelques problemes de débutant à mentionner lors de démarrage de projet étaient:
* Utilisation d'un **seul** ordinateur portable au premier temps pour travailler sur le projet mais à un moment donné il fallait que chacun travaille de son côté et adopter le partage des taches.
* Des problèmes de la configuration de fichier env qui n'est pas un fichier de commit.
* Des erreurs liées aux versions de php qui étaient plus embetantes que les erreurs de type “No application encryption key has been specified” qui pouvaient se résoudre en faisant:       php artisan key:generate
* Des problémes liés aux syntaxes de laravel.


