
### Description
le sitemap de notre application est La page d’accueil qui est constituée de **menu principal** et aussi les titres des dernières recettes. Le Menu principal a les éléments suivants:

| PAGE PARENT       | CONTENU                                                                                             | PAGE ENFANT/ BOUTON CLICKABLE                 | URL             |
|-------------------|-----------------------------------------------------------------------------------------------------|-----------------------------------------------|-----------------|
| ACCUEIL           | Affichage des titres de dernieres recettes                                                          | Menu principal                                | 127.0.0.1:8000/ |
| RECETTES          | Affichage titre des recettes                                                                        | Lien vers les recettes/Menu principal         | /recettes       |
| CONTACT           | Formulaire de contact a remplir                                                                     | Menu principal                                | /contact        |
| CREER UNE RECETTE | Formulaire de nouvelle recette a remplir, Affichage des recettes disponible pour une action de CRUD | Lien de retour, lien d?ajout, bouton submit   | /recettesCrud   |
| SE CONNECTER      | Se logger grace aux differents types de comptes exterieurs et interieur                             | Lien vers les comptes ext‚rieurs et int‚rieur | /login          |

## Detail

| PAGE PARENT       | INFO SUPPLEMENTAIRE                                                                                                 |
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

Il nous ne reste maintenant que d’utiliser le **Model** pour que notre conception soit un vrai **design pattern MVC**.


## Les Problèmes Rencontrés

Quelques problemes de débutant à mentionner lors de démarrage de projet étaient:
1- Utilisation d'un **seul** ordinateur portable au premier temps pour travailler sur le projet mais à un moment donné il fallait que chacun travaille de son côté et adopter le partage des taches.
2- Après le clonage des fichiers de projet sur un deuxieme ordinateur,il y'avait des problèmes lié à la configuration de fichier env qui n'est pas un fichier de commit.
3- Des erreurs liées aux versions de php qui étaient plus embetantes que les erreurs de type “No application encryption key has been specified” qui pouvaient se résoudre en faisant:  
php artisan key:generate
3- Des problémes liés aux syntaxes de laravel
4- etc

