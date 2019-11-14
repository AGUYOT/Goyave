# Goyave - Framework PHP

# Installation

## Installation Classique (Wamp, ...)

1. Cloner le dépôt Github
2. Exécuter la commande `composer install` afin de récupérer les dépendances
3. Modifier le `base_path` et `base_uri` dans `Config/config.json` selon le besoin (optionnel)
4. Vous pouvez désormais utiliser le Framework !

## Installation avec Docker
_à l'heure actuelle, difficultés d'installation à cause de la configuration sur les branches master/dev/... Si vous voulez constater le fonctionnement avec docker, utilisez la branche feature/validation (ancienne version)_

1. Cloner le dépôt Github
2. Exécuter la commande `composer install` afin de récupérer les dépendances
2. Exécuter la commande `docker-compose up -d` afin de lancer les containers docker (Serveur Web, Validateur, ...)
3. Modifier le `base_path` et `base_uri` dans `Config/config.json` selon le besoin (requis)
4. Vous pouvez désormais utiliser le Framework (Serveur Web sur le port 8080, Validateur sur le port 8888) !

# Utilisation

Comme pour de nombreux Framework PHP célèbres, il suffit de créer vos **Contrôleurs** [`/Controllers`] (héritant de `BaseController`) et leurs **Routes** [`Config/routes.json`] associées, ainsi que les **Templates ou Vues** [`Views/`] qu'ils utiliseront !

Pour aller plus loin, vous pouvez activer/désactiver la "DebugBar", modifier les modes de validation existant et leurs options [`Config/debug.json`], ou encore les options liées à la sécurité [`Config/security.json`], et même les utilisateurs [`Config/users.json`] !

Les utilisateurs expérimentés pourront même aller modifier manuellement les **Services** [`/Services`] afin de les personnaliser pour leurs besoins !
