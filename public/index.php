<?php

/**
 * declaration de constant pour l'application
 * structuration de l'application avec le constant
 * de chemin d'access dans Config/ApplicationConfig
 */
define('ROOT', dirname(__DIR__));
require ROOT."/config/ApplicationConfig.php";
$system_path = CORE;
$application_folder = APP;
$view_folder = APP."/views";

/**
 * declaration de constant pour codeIgniter
 * chargement de l'autoloader de codeIgniter
 */
require ROOT."/config/FrameworkConfig.php";
require_once BASEPATH.'core/CodeIgniter.php';
