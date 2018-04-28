<?php

$config['base_url'] = 'http://localhost:8080/';
$config['index_page'] = '';

$config['uri_protocol'] = 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language'] = 'english';
$config['charset'] = 'UTF-8';

$config['enable_hooks'] = false;
$config['subclass_prefix'] = 'Ng\\';

$config['composer_autoload'] = ROOT."/vendor/autoload.php";

$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

$config['enable_query_strings'] = false;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';


$config['allow_get_array'] = true;

$config['log_threshold'] = 4;
$config['log_path'] = APPPATH."logs/";
$config['log_file_extension'] = 'log';
$config['log_file_permissions'] = 0777;
$config['log_date_format'] = 'Y-m-d H:i:s';

$config['error_views_path'] = '';
$config['cache_path'] = APPPATH.'cache';


$config['cache_query_string'] = false;
$config['encryption_key'] = 'xRuqkhsoZ5qV6y3kqARFJFdPqJvp7X2z';

$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'Application_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = APPPATH."utils/sessions";
$config['sess_match_ip'] = false;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = false;

$config['cookie_prefix']    = 'SCS';
$config['cookie_domain']    = '';
$config['cookie_path']      = '/';
$config['cookie_secure']    = false;
$config['cookie_httponly']  = false;

$config['csrf_protection'] = false;
$config['csrf_token_name'] = 'csrf_token';
$config['csrf_cookie_name'] = 'csrf_ctoken';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = true;
$config['csrf_exclude_uris'] = [];


$config['compress_output'] = false;

$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = false;
$config['proxy_ips'] = '';
