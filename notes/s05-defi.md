# Session 05 - Défi : articles récents sur l'accueil

latestPosts contient au plus 3 articles : oui

Seuls les articles publiés sont transmis à la vue : oui

home.blade.php utilise x-post-card et @forelse : oui

Le nouveau test passe et php artisan test est vert : oui

**Pourquoi get() et pas paginate(3) sur la page d'accueil ?**

Parce que sur l'accueil, on veut juste afficher les 3 derniers articles, sans pagination. `get()` récupère les résultats de la requête, alors que `paginate(3)` ajoute une pagination qui n'est pas nécessaire ici.