<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

require_once 'bootstrap.php';

$app = TogetherNetworks\App::getInstance();

echo $app->getOutput();

