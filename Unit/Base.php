<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Unit;

class Base extends AbstractUnit
{
    public function isVulnerable(AbstractUnit $initiator): bool
    {
        return false;
    }
}