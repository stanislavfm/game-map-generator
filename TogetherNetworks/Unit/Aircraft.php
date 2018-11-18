<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Unit;

class Aircraft extends AbstractUnit
{
    public function isVulnerable(AbstractUnit $initiator): bool
    {
        return false;
    }
}