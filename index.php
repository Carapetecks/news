<?php
session_start();
@define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)));
require_once ('config/db.php');
require('vendor/autoload.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'Core\CoreController@index');
Macaw::get('page', 'Core\CoreController@page');
Macaw::get('view/(:num)', 'Core\CoreController@view');

Macaw::dispatch();
