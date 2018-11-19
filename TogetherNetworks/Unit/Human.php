<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Unit;

class Human implements UnitInterface
{
    public function isVulnerable(UnitInterface $initiator): bool
    {
        if ($initiator instanceof Equipment) {
            return true;
        }

        if ($initiator instanceof Human) {
            return true;
        }

        return false;
    }
}