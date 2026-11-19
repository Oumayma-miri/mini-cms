# Session 10 - Robustesse

TagAdminTest contient 5 tests verts : oui
/posts/categorie/inconnue affiche Catégorie introuvable avec le statut 404 : oui
php artisan test est vert : oui

1. Pourquoi le message de messages() l'emporte-t-il sur celui de lang/fr/validation.php ?

Laravel recherche d'abord le message personnalisé associé précisément au champ et à la règle dans la Form Request. Il utilise le message général de lang/fr/validation.php uniquement lorsque cette méthode ne fournit pas de message plus précis.

2. Pourquoi phpunit.xml fixe-t-il APP_LOCALE ?

phpunit.xml applique APP_LOCALE=fr avant les tests, ce qui garantit des assertions françaises identiques sur chaque poste et dans un clone propre, indépendamment de la locale configurée dans .env.

3. Pourquoi CategoryController n'a-t-il besoin d'aucun try/catch ?

Les données invalides sont arrêtées avant l'action par la Form Request, les catégories inconnues sont transformées en 404 par la liaison de modèle et le gestionnaire d'exceptions, et les écritures en lecture seule sont arrêtées avec 503 par le middleware. Ces réponses sont déjà traitées à leur bonne couche, donc un try/catch ne ferait qu'ajouter une gestion inutile.
