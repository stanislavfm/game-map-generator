<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks;

final class App
{
    private static $instance;

    public static function getInstance(): App
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function getOutput()
    {
        $mapGenerator = new Map\Generator();
        $map = $mapGenerator->generate(30, 20);

        $mapRenderer = new Map\Renderer();
        return $mapRenderer->render($map);
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }
}