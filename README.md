

## Description

Application de gestion de niveaux scolaire principalement de CRUD de niveaux scolaire fait avec VueJS et Laravel

## Installation des prérequis 

Etapes à suivre pour installer les dépendances du projet

Se positionner dans le repertoire du projet et suivre les étapes suivantes

1. Executer `composer install` Pour les dépendances de Laravel

2. Executer `npm install` pour les dépendances de VueJS

3. Dupliquer le fichier .env.exemple et le renommer en .env (via la commande suivante)
   `cp .env.example .env`

4. Creer manuellement une base de données vide sur votre serveur MySQL

5. Configurer le fichier .env avec les informations de connexion à la base de données

6. Executer la commande suivante pour générer la clé de l'application `php artisan key:generate`

7. Executer la commande suivante pour migrer les tables de la base de données `php artisan migrate`

8. Executer la commande suivante pour remplir la base de données avec des données de test `php artisan db:seed`


## Lancer l'application

Pour lancer l'application, il faut lancer le serveur Laravel et le client VueJS

1. Lancez premièrement le serveur Laravel avec `php artisan serve`

2. Ensuite lancez le serveur Vue avec `npm run dev`
