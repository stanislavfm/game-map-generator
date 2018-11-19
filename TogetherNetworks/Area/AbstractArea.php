<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Area;

use TogetherNetworks\Unit;

abstract class AbstractArea
{
    protected $unit;

    public function __construct()
    {
        $this->unit = Unit\Factory::createNone();
    }

    /**
     * @param Unit\UnitInterface $unit
     * @throws \Exception
     * @return void
     */
    public function placeUnit(Unit\UnitInterface $unit): void
    {
        if (!$this->isPossibleUnitPlacing($unit)) {
            throw new \Exception(sprintf('You can not place %s at %s.', get_class($unit), __CLASS__));
        }

        $this->unit = $unit;
    }

    public function destroyUnit(): void
    {
        $this->unit = Unit\Factory::createNone();
    }

    public function hasUnit(): bool
    {
        return !$this->unit instanceof Unit\None;
    }

    public function getUnit(): Unit\UnitInterface
    {
        return $this->unit;
    }

    abstract public function isPossibleUnitPlacing(Unit\UnitInterface $unit): bool;
}