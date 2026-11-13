# Session 06 - Défi : publier et dépublier

- La route `posts.publication` apparaît dans `route:list` avec le verbe PATCH : **Oui**
- Le bouton affiche « Publier » sur un brouillon et « Dépublier » sur un article publié : **Oui**
- `published_at` est rempli à la publication et vidé à la dépublication : **Oui**
- Le nouveau test passe et `php artisan test` est vert : **Oui**

**Pourquoi PATCH et pas PUT ni GET pour ce bouton ?**

On utilise PATCH parce qu'on veut modifier seulement l'état de publication d'un article existant, sans modifier tout le reste. GET sert à récupérer des données et PUT sert généralement à remplacer une ressource complète. Donc PATCH est le plus adapté ici.