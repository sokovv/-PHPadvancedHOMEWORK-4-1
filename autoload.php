<?php
declare(strict_types=1);

/**
 * @throws Exception
 */

function autoload(string $classname)
{
    $file = str_replace('\\', '/', $classname) . '.php';
    if (!is_file($file)) {
       throw new Exception('Not File '. $file);
    }
    return require_once($file);
}

// регистрация
spl_autoload_register('autoload');