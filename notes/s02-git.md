# Session 02 - Git et GitHub

## 1. Index et commit

La commande git add fait passer les modifications du répertoire de travail à l'index  c'est comme selectionner . La commande git commit enregistre les modifications préparées dans l'index dans l'historique du dépôt local.
## 2. Branche et tag

Une branche permet de poursuivre un développement séparément des autres branches. Un tag désigne un commit précis c'est nommer 
## 3. Le fichier .env

Le fichier .env contient la configuration locale du projet et peut contenir des informations sensibles, comme des mots de passe et des clés secrètes. Il ne doit pas être poussé sur GitHub. Un autre développeur peut créer son propre fichier .env à partir de .env.example, puis configurer ses propres valeurs.
## 4. Le dossier vendor/

Le dossier vendor/ contient les dépendances PHP installées par Composer. Il n'est généralement pas versionné, car il peut être reconstruit avec la commande composer install. Le fichier composer.lock permet de retrouver les versions exactes des dépendances, tandis que composer.json décrit les dépendances du projet.
## 5. Git Credential Manager

Git Credential Manager permet de stocker et de réutiliser les identifiants nécessaires à l'authentification auprès de GitHub. Sous Windows, les identifiants sont généralement stockés dans le Gestionnaire d'identifiants Windows

## 6. Historique depuis lab-01

Nombre de commits depuis lab-01 :
4
Fichiers modifiés depuis lab-01 :
4
Ce que git tag -n affiche pour lab-01 :
lab-01          Initial commit