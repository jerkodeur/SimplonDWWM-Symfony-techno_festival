# SimplonDWWM-Symfony-techno_festival
## Présentation
A peine certifié, vous êtes embauché en même temps que deux autres juniors dans une agence web. Dès votre premier jour votre responsable souhaite vous mettre à l'épreuve en vous confiant le développement d'un petit projet que l'agence vient de recevoir

- ##### Cadre du projet
  Deux passionnés de music techno organisent un festival à Bazoches-lès-Bray dans le sud de la Seine-et-Marne du 20 au 22 août 2021.Ils ont obtenu un petit financement de la commune et souhaitent investir cet argent dans la conception d'un site web afin de communiquer sur l'évènement et recevoir les réservations aux 3 concerts prévus chaque jour.
- ##### Spécifications du projet
  Le projet sera développé avec le Framework Symfony
- ##### Prérequis 
    - HTML
    - PHP
    - Base de Symfony 
- ##### Objectifs
  Appliquer les bases de Symfony (route, authentification, Twig, formulaire)
- ##### Charte graphique
  La chartre graphique reprendra le thème Vapor du site [bootswatch](https://bootswatch.com/vapor/)
- ##### Documents
  [Cahier des charges complet](public/asset/projet_symfony.pdf)
  [Rendu de la présentation](public/asset/presentation_technonite.pdf)

- ##### Spécifications techniques
  - Sécurisation des routes
  - Création de fixtures avec Faker
  - Mise en place d'un service afin d'optimiser le code
## Installation du projet
-   Cloner / forker le dépôt git sur votre machine
-   Installer [Composer](https://getcomposer.org/download/) si nécessaire 
-   Utiliser composer pour installer les dépendances du projet
```sh
        composer i
```
- Modifier les informations de base de données contenus dans le fichier [.env](.env) de votre projet (_si vos identifiants sont sensibles, créer un fichier .env.local qui sera une copie du fichier .env et y mettre les informations sensibles_)
- ###### Base de données - Créer la structure et peupler la base de données
```sh
        # Création la base de données grâce à Symfony
        php bin/console doctrine:database:create

        # Création des tables
        php bin/console make:migration
        php bin/console doctrine:migration:migrate

        # Peupler la base de données avec des fausses données
        php bin/console doctrine:fixtures:load
```
- ###### Lancer le serveur de symfony
```sh
        php bin/console server:start --no-tls
```

- [Afficher la page](http://localhost:8000/) en localhost

__Vous pouvez vous connecter grâce aux identifiants suivants:__
user@user.fr  ```Mot de passe:``` _motdepasse_
admin@admin.fr  ```Mot de passe:``` _motdepasse_

__ENJOY__