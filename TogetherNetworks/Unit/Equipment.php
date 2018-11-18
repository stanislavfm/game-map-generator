<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Unit;

class Equipment extends AbstractUnit
{
    public function isVulnerable(AbstractUnit $initiator): bool
    {
        if ($initiator instanceof Aircraft) {
            return true;
        }

        if ($initiator instanceof Equipment) {
            return true;
        }

        if ($initiator instanceof Human) {
            return true;
        }

        return false;
    }
}