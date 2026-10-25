# Session 03 - Routes, contrôleurs et layout

## Défi

**1. URL produite par `route('about')` :**

`http://localhost:8000/a-propos`

**2. URL produite par `route('posts.show', 'routes-et-controleurs')` :**

`http://localhost:8000/posts/routes-et-controleurs`

**3. URL produite par `route('posts.archive', 2025)` :**

`http://localhost:8000/posts/archive/2025`

**4. Pourquoi `/posts/archive/abc` et `/posts/article-inconnu` répondent toutes deux 404, et quelle ligne de code en est responsable dans chaque cas ?**

Pour `/posts/archive/abc`, le paramètre `year` doit être un nombre. La contrainte `whereNumber('year')` dans `web.php` refuse la route.

Pour `/posts/article-inconnu`, la route fonctionne, mais l'article n'existe pas. La méthode `PostController::show()` exécute `abort(404)`.

**5. Que se passe-t-il si une vue appelle `route('posts.show')` sans paramètre ?**

Laravel affiche une erreur `Missing required parameter for [Route: posts.show]`, car le paramètre `slug` est obligatoire.