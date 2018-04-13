<?php

defined("BASEPATH") or exit("No direct script access allowed");

$lang["email_must_be_array"] = "la methode de validation de l'email doit etre passer un array";
$lang["email_invalid_address"] = "Adresse Email Invalide: %s";
$lang["email_attachment_missing"] = "Impossible d'assigner l'annexe : %s";
$lang["email_attachment_unreadable"] = "Impossible d'ouvrir l'annexe : %s";
$lang["email_no_from"] = "Impossibe d'envoyer un Mail sans l'entete 'From' .";
$lang["email_no_recipients"] = "Vous devez inclure les destinataires: To, Cc, or Bcc";
$lang["email_send_failure_phpmail"] = "Impossibe d'envoyser un Mail avec PHP mail().";
$lang["email_send_failure_sendmail"] = "Impossibe d'envoyser un Mail avec PHP Sendmail.";
$lang["email_send_failure_smtp"] = "Impossibe d'envoyser un Mail avec PHP SMTP.";
$lang["email_sent"] = "Votre message a bien ete envoyer utilisant le protocol suivant : %s";
$lang["email_no_socket"] = "Impossible d'ouvrir le socket pour SendMail. Verifiez la configuration.";
$lang["email_no_hostname"] = "Vous n'avez pas preciser le STMP host.";
$lang["email_smtp_error"] = "L'erreur STMP suivante a ete rencontrer: %s";
$lang["email_no_smtp_unpw"] = "Erreurr: vous devez definir un password et un username.";
$lang["email_failed_smtp_login"] = "Echec d'envoi de la commande AUTH LOGIN. Erreur: %s";
$lang["email_smtp_auth_un"] = "Echec d'authentification username. Erreur: %s";
$lang["email_smtp_auth_pw"] = "Echec d'authentification password. Erreur: %s";
$lang["email_smtp_data_failure"] = "Impossible d'envoyer les donnees: %s";
$lang["email_exit_status"] = "statut code de sortie: %s";
