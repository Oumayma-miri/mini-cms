# Session 07 - Défi : articles de la même catégorie

- La section « Dans la même catégorie » apparaît sous un article publié qui a une catégorie : **Oui**
- L'article affiché n'apparaît pas dans sa propre section : **Oui**
- Un brouillon de la même catégorie n'apparaît pas : **Oui**
- La page s'ouvre sans LazyLoadingViolationException : **Oui**
- Le nouveau test passe et `php artisan test` est vert : **Oui**

**Combien de requêtes SQL charge la section, et pourquoi pas une par carte ?**

Une seule requête SQL charge les articles de la même catégorie. On utilise Eloquent pour récupérer tous les articles en une seule fois, au lieu de faire une requête pour chaque carte. Cela évite le problème N+1 et améliore les performances.
