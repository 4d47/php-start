<?php
chdir(dirname(__DIR__));

if (php_sapi_name() === 'cli-server' && is_file( dirname(__FILE__) . $_SERVER['REQUEST_URI'])) {
    return false;
}

# setup autoloading
require 'vendor/autoload.php';

# load configs
$config = array_replace_recursive(require 'config-defaults.php', file_exists('config.php') ? require 'config.php' : array());

# wireup dependencies
$injector = new Auryn\Provider();
foreach ($config['definitions'] as $className => $params) {
    $injector->define($className, $params);
}

# initialize locale
// putenv('LC_ALL=' . $config['ui']['locale']);
// setlocale(LC_ALL, $config['ui']['locale']);
// bindtextdomain('messages', 'locales');
// textdomain('messages');

# handle request
\Http\Resource::handle($config['resources'], array($injector, 'make'));

