<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Unit;

abstract class AbstractUnit
{
    abstract public function isVulnerable(AbstractUnit $initiator): bool;
}