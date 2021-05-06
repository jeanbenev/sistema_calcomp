<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'prod');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

/**
 * @uses Função personalizada de debug.
 * $var: variavel a ser exibida.
 * $exit = true: destroi a aplicação.
 * @return print_r do parametro $var
 */
function dbg($var = "", $exit = true){
    print "<pre>";
    print_r($var);
    print "</pre>";
    if($exit)
        die();
}


(new yii\web\Application($config))->run();
