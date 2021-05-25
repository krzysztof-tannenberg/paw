<?php


require_once 'core/Config.class.php';
require_once 'core/App.class.php';

use core\App;
use core\Config;

$_PARAMS = array(); #global array for parameters from clean URL
$conf = new Config();


$conf->clean_urls = true;           
$conf->action_param = 'action';     
$conf->action_script = '/ctrl.php'; 

include 'config.php'; //set user configuration


$conf->root_path = dirname(__FILE__);
$conf->server_url = $conf->protocol.'://'.$conf->server_name;
$conf->app_url = $conf->server_url.$conf->app_root.$conf->public_dir;
if ($conf->clean_urls) $conf->action_root = $conf->app_root."/"; #for clean urls
else $conf->action_root = $conf->app_root.'/index.php?'.$conf->action_param.'='; #for regular urls
$conf->action_url = $conf->server_url.$conf->action_root;

App::createAndInitialize($conf);
