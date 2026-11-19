- Le bandeau s'affiche sur toutes les pages quand SITE_READ_ONLY=true : oui
- Le bandeau disparaît quand SITE_READ_ONLY=false : oui
- La page Article introuvable propose au plus trois articles publiés, sans brouillon : oui
- Aucune LazyLoadingViolationException sur /posts/999 : oui
- Les deux nouveaux tests passent et php artisan test est vert : oui
Pourquoi le bandeau est-il dans le layout et pas dans chaque vue ?

Le bandeau est placé dans le layout parce qu'il est partagé par toutes les pages. Cela permet de l'afficher partout sans répéter le même code dans chaque vue.

Pourquoi le test du bandeau n'a-t-il pas besoin de modifier .env ?

Parce que le test peut définir temporairement la variable SITE_READ_ONLY dans son environnement de test, sans modifier le fichier .env réel du projet.