# Cycle de vie d'une requête Laravel

1. Le navigateur envoie une requête `GET /heure`.
2. `public/index.php` reçoit la requête et charge l'autoloader Composer (`vendor/autoload.php`).
3. `bootstrap/app.php` initialise l'application Laravel et configure le routage.
4. `routes/web.php` contient la route `/heure` que Laravel recherche.
5. La fonction associée à cette route renvoie la vue `resources/views/heure.blade.php`.
6. Laravel compile la vue Blade en HTML et renvoie la réponse au navigateur.