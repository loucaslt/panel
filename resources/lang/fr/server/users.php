<?php

return [
    'permissions' => [
        'websocket_*' => 'Permet l’accès à la prise web pour ce serveur.',
        'control_console' => 'Permet à l’utilisateur d’envoyer des données à la console serveur.',
        'control_start' => 'Permet à l’utilisateur de démarrer l’instance serveur.',
        'control_stop' => 'Permet à l’utilisateur d’arrêter l’instance serveur.',
        'control_restart' => 'Permet à l’utilisateur de redémarrer l’instance serveur.',
        'control_kill' => 'Permet à l’utilisateur de tuer l’instance serveur.',
        'user_create' => 'Permet à l’utilisateur de créer de nouveaux comptes d’utilisateurs pour le serveur.',
        'user_read' => 'Permet à l’utilisateur la permission de visualiser les utilisateurs associés à ce serveur.',
        'user_update' => 'Permet à l’utilisateur de modifier les autres utilisateurs associés à ce serveur',
        'user_delete' => 'Permet à l’utilisateur de supprimer d’autres utilisateurs associés à ce serveur.',
        'file_create' => 'Permet à l’utilisateur la permission de créer de nouveaux fichiers et répertoires.',
        'file_read' => 'Permet à l’utilisateur de voir les fichiers et les dossiers associés à cette instance serveur, ainsi que de visualiser leur contenu.',
        'file_update' => 'Permet à l’utilisateur de mettre à jour les fichiers et dossiers associés au serveur.',
        'file_delete' => 'Permet à l’utilisateur de supprimer des fichiers et des répertoires.',
        'file_archive' => 'Permet à l’utilisateur de créer des archives de fichiers et de décompresser les archives existantes.',
        'file_sftp' => 'Permet à l’utilisateur d’effectuer les actions de fichiers ci-dessus à l’aide d’un client SFTP.',
        'allocation_read' => 'Permet l’accès aux pages de gestion de l’allocation du serveur.',
        'allocation_update' => 'Permet à l’utilisateur d’apporter des modifications aux allocations du serveur.',
        'database_create' => 'Permet à l’utilisateur la permission de créer une nouvelle base de données pour le serveur.',
        'database_read' => 'Permet à l’utilisateur d’afficher les bases de données serveur.',
        'database_update' => 'Permet à un utilisateur d’apporter des modifications à une base de données. Si l’utilisateur n’a pas l’autorisation « Afficher le mot de passe » ainsi qu’ils ne seront pas en mesure de modifier le mot de passe.',
        'database_delete' => 'Permet à un utilisateur la permission de supprimer une instance de base de données.',
        'database_view_password' => 'Permet à un utilisateur d’afficher un mot de passe de base de données dans le système.',
        'schedule_create' => 'Permet à un utilisateur de créer un nouvel horaire pour le serveur.',
        'schedule_read' => 'Permet à un utilisateur d’afficher les plannings d’un serveur',
        'schedule_update' => 'Permet à un utilisateur d’apporter des modifications à un calendrier serveur existant.',
        'schedule_delete' => 'Permet à un utilisateur de supprimer un planning pour le serveur.',
    ],
];
