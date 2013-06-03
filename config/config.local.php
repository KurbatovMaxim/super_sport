<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/
/**
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 */

/**
 * Настройка базы данных
 */
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'livestreet';
$config['db']['params']['pass'] = 'Ecu0dfksm';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'livestreet';
$config['db']['table']['prefix'] = 'prefix_';

$config['path']['root']['web'] = 'http://livestreet';
$config['path']['root']['server'] = 'Z:\\home\\livestreet\\www';
$config['path']['offset_request_url'] = '0';
$config['db']['tables']['engine'] = 'InnoDB';
$config['view']['name'] = 'Your Site';
$config['view']['description'] = 'Description your site';
$config['view']['keywords'] = 'site, google, internet';
$config['view']['skin'] = 'synio';
$config['sys']['mail']['from_email'] = 'admin@admin.adm';
$config['sys']['mail']['from_name'] = 'Почтовик Your Site';
$config['general']['close'] = false;
$config['general']['reg']['activation'] = false;
$config['general']['reg']['invite'] = false;
$config['lang']['current'] = 'russian';
$config['lang']['default'] = 'russian';
return $config;
?>