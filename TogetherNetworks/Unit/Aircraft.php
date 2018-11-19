<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Unit;

class Aircraft implements UnitInterface
{
    public function isVulnerable(UnitInterface $initiator): bool
    {
        return false;
    }
}