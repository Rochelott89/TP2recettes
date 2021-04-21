
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
Au début, pour mieux comprendre comme le TP1, on a créé des fichiers de recette en statique avant d'aller les chercher dans la B.D.D en dynamique.Donc dans les premiers pas les routes nous emmènent directement vers les pages Views sans passer par les contrôleurs.
 




## Les Problèmes Rencontrés
Dans un premier temps on utilisait le même ordinateur portable pour travailler sur le TP mais à un moment donné il fallait que chacun travaille de son côté.
Après clonage des fichiers de projet sur l’ordinateur, il ne marchait pas. Le problème était lié à 
1-Fichier env n’est pas un fichier de commit. donc il faut le créer sur la machine locale avec les variables d’environnement associées à la même machine.

2- Pour résoudre ‘erreur de “No application encryption key has been specified”

Il faut créer avec php artisan une clé: php artisan key:generate
