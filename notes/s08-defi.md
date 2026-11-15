# Session 08 - Défi

- La route `posts.tag` utilise `{tag:slug}` : **Oui**
- La page d'un tag n'affiche ni brouillon ni article d'un autre tag : **Oui**
- Les tags des cartes sont des liens : **Oui**
- L'accueil n'affiche que les tags qui ont au moins un article publié : **Oui**
- Les trois nouveaux tests passent et `php artisan test` est vert : **Oui**

**Pourquoi filtrer les tags vides après `get()` plutôt que d'afficher (0) ?**

Pour afficher uniquement les tags qui ont au moins un article publié et éviter de montrer des tags sans contenu.

**Combien de requêtes ajoute la liste des tags populaires, et pourquoi pas une par tag ?**

Une seule requête supplémentaire grâce au chargement groupé des données avec Eloquent. Cela évite le problème N+1 et permet de récupérer les informations de tous les tags en même temps.

### Auto-vérification

**Pourquoi aucune migration, aucun modèle et aucun test n'a changé ?**

Parce que Laravel utilise Eloquent et les migrations pour gérer la base de données indépendamment du système utilisé. On change seulement la configuration dans le fichier `.env`, mais le code reste le même.