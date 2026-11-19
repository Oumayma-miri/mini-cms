# Session 09 - Défi

Le bandeau s'affiche sur toutes les pages quand SITE_READ_ONLY=true : oui
Le bandeau disparaît quand SITE_READ_ONLY=false : oui
La page Article introuvable propose au plus trois articles publiés, sans brouillon : oui
Aucune LazyLoadingViolationException sur /posts/999 : oui
Les deux nouveaux tests passent et php artisan test est vert : oui

Pourquoi le bandeau est-il dans le layout et pas dans chaque vue ?

Le layout entoure toutes les pages du site, y compris les pages d'erreur, donc il évite de dupliquer le bandeau dans chaque vue.

Pourquoi le test du bandeau n'a-t-il pas besoin de modifier .env ?

Le test utilise config(['site.read_only' => true]) pour modifier la valeur uniquement pendant son exécution ; phpunit.xml conserve false pour les autres tests et .env reste inchangé.
