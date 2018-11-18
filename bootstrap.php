<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

spl_autoload_register(function ($className) {
    include  str_replace('\\', '/', $className) . '.php';
});