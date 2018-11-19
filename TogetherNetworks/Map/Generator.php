<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Map;

use TogetherNetworks\Area;
use TogetherNetworks\Unit;

class Generator
{
    /**
     * @param int $width
     * @param int $height
     * @return Map
     * @throws \Exception
     */
    public function generate(int $width, int $height): Map
    {
        if ($width <= 0 || $width > Map::MAX_SIZE) {
            throw new \Exception('Incorrect map width.');
        }

        if ($height <= 0 || $height > Map::MAX_SIZE) {
            throw new \Exception('Incorrect map height.');
        }

        $mapData = [];

        for ($i = 0; $i < $width; ++$i) {

            $mapData[$i] = [];

            for ($j = 0; $j < $height; ++$j) {

                $randomArea = $this->getRandomArea();

                do {
                    $randomUnit = $this->getRandomUnit();
                } while (!$randomArea->isPossibleUnitPlacing($randomUnit));

                $randomArea->placeUnit($randomUnit);

                $mapData[$i][$j] = $randomArea;
            }
        }

        $this->generateBases($mapData);

        return new Map($width, $height, $mapData);
    }

    /**
     * @param array $data
     * @throws \Exception
     */
    private function generateBases(array &$data)
    {
        for ($n = 1; $n <= Map::BASE_COUNT; ++$n) {

            $base = Unit\Factory::createBase();

            do {
                $row = array_rand($data);
                $column = array_rand($data[$row]);
                /** @var Area\AbstractArea $area */
                $area = $data[$row][$column];
            } while (!$area->isPossibleUnitPlacing($base));

            $area->placeUnit($base);
        }
    }

    private function getRandomArea(): Area\AbstractArea
    {
        $areas = [
            'Mountain',
            'Plain',
            'Swamp',
            'Water'
        ];

        $randomArea = array_rand($areas);
        $createMethod = 'create' . $areas[$randomArea];

        return Area\Factory::$createMethod();
    }

    private function getRandomUnit(): Unit\UnitInterface
    {
        $units = [
            'Aircraft',
            'Equipment',
            'Human',
            'None'
        ];

        $randomUnit = array_rand($units);
        $createMethod = 'create' . $units[$randomUnit];

        return Unit\Factory::$createMethod();
    }
}