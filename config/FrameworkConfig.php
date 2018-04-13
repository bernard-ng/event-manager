<?php

// definition du dossier courant pour le CLI
if (defined('STDIN')) {
    chdir(dirname(__FILE__));
}

if (($_temp = realpath($system_path)) !== false) {
    $system_path = $_temp.DIRECTORY_SEPARATOR;
} else {
    $system_path = strtr(
        rtrim($system_path, '/\\'),
        '/\\',
        DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
    ).DIRECTORY_SEPARATOR;
}


if (!is_dir($system_path)) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Bug dans le dossier system, redefinissez: '.pathinfo(__FILE__, PATHINFO_BASENAME);
    exit(3);
}

/*
* -------------------------------------------------------------------
*  Definition des constantes chemin d'acces
* -------------------------------------------------------------------
*/

define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));              //fichier courant (public/index.php)
define('BASEPATH', $system_path);                                   // chemim du system (src/core)
define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);            // chemin de la racine (public)
define('SYSDIR', basename(BASEPATH));                               // nom du dossier system (core)


if (is_dir($application_folder)) {
    if (($_temp = realpath($application_folder)) !== false) {
        $application_folder = $_temp;
    } else {
        $application_folder = strtr(
            rtrim($application_folder, '/\\'),
            '/\\',
            DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
        );
    }
} elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR)) {
    $application_folder = BASEPATH.strtr(
        trim($application_folder, '/\\'),
        '/\\',
        DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
    );
} else {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo "Bug avec le dossier de l'application, redefinissez : ".self;
    exit(3);
}

define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);             // chemin de l'application (src/Application)


if (! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR)) {
    $view_folder = APPPATH.'views';
} elseif (is_dir($view_folder)) {
    if (($_temp = realpath($view_folder)) !== false) {
        $view_folder = $_temp;
    } else {
        $view_folder = strtr(
            rtrim($view_folder, '/\\'),
            '/\\',
            DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
        );
    }
} elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR)) {
    $view_folder = APPPATH.strtr(
        trim($view_folder, '/\\'),
        '/\\',
        DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
    );
} else {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Bug dans le dossier de vue, redefinissez: '.self;
    exit(3);
}

define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);                   // chemin des vues (src/Application/views)
