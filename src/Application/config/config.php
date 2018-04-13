<?php

$config['base_url'] = 'http://localhost:8989/';
$config['index_page'] = '';

$config['uri_protocol'] = 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language'] = 'english';
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| If you would like to use the 'hooks' feature you must enable it by
| setting this variable to TRUE (boolean).  See the user guide for details.
|
*/
$config['enable_hooks'] = false;
$config['subclass_prefix'] = 'Ng\\';

$config['composer_autoload'] = ROOT."/vendor/autoload.php";

/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
|
| This lets you specify which characters are permitted within your URLs.
| When someone tries to submit a URL with disallowed characters they will
| get a warning message.
|
| As a security measure you are STRONGLY encouraged to restrict URLs to
| as few characters as possible.  By default only these are allowed: a-z 0-9~%.:_-
|
| Leave blank to allow all characters -- but only if you are insane.
|
| The configured value is actually a regular expression character group
| and it will be executed as: ! preg_match('/^[<permitted_uri_chars>]+$/i
|
| DO NOT CHANGE THIS UNLESS YOU FULLY UNDERSTAND THE REPERCUSSIONS!!
|
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default CodeIgniter uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string 'words' that will
| invoke your controllers and its functions:
| example.com/index.php?c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since CodeIgniter is designed primarily to
| use segment based URLs.
|
*/
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

/*
|--------------------------------------------------------------------------
| Cache Include Query String
|--------------------------------------------------------------------------
|
| Whether to take the URL query string into consideration when generating
| output cache files. Valid options are:
|
|   FALSE      = Disabled
|   TRUE       = Enabled, take all query parameters into account.
|                Please be aware that this may result in numerous cache
|                files generated for the same page over and over again.
|   array('q') = Enabled, but only take into account the specified list
|                of query parameters.
|
*/
$config['cache_query_string'] = false;


$config['encryption_key'] = 'xRuqkhsoZ5qV6y3kqARFJFdPqJvp7X2z';

$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'Application_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = APPPATH."utils/sessions";
$config['sess_match_ip'] = false;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = false;

$config['cookie_prefix']    = 'Application';
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
