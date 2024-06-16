<?php
/*
 * Fichier de configuration locale pour fournir les remplacements de configuration app.php.
 * Copiez et enregistrez ce fichier sous le nom app_local.php et apportez les modifications nécessaires.
 * Note : Il n'est pas recommandé de commettre des fichiers contenant des identifiants tels que app_local.php
 * dans un système de contrôle de version de code source.
 */
return [
    /*
     * Niveau de débogage :
     *
     * Mode production :
     * false : Aucun message d'erreur, d'erreurs ou d'avertissements affichés.
     *
     * Mode développement :
     * true : Erreurs et avertissements affichés.
     */
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    /*
     * Configuration de sécurité et de chiffrement
     *
     * - salt - Chaîne aléatoire utilisée dans les méthodes de hachage de sécurité.
     *   La valeur du sel est également utilisée comme clé de chiffrement.
     *   Vous devez traiter ces données comme extrêmement sensibles.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '7373f74bff2fbcdde765e0b97278532218a65aadb594d189c6da1ebc8ee7c625'),
    ],

    /*
     * Informations de connexion utilisées par le ORM pour se connecter
     * aux magasins de données de votre application.
     *
     * Voir app.php pour plus d'options de configuration.
     */

     ////// MA DB
    'Datasources' => [
        'default' => [
            'host' => 'localhost', // ou '127.0.0.1',
            //'port' => 'non_standard_port_number',
            'username' => 'root',
            'password' => '',
            'database' => 'cake_db',
            'url' => env('DATABASE_URL', null),
        ],

        /*
         * La connexion de test est utilisée pendant la suite de tests.
         */
        'test' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'test_myapp',
            //'schema' => 'myapp',
            'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tmp/tests.sqlite'),
        ],
    ],

    /*
     * Configuration de messagerie électronique.
     *
     * Configuration d'hôte et d'informations d'identification en cas d'utilisation de SmtpTransport
     *
     * Voir app.php pour plus d'options de configuration.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
