<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Map;

use TogetherNetworks\Area;
use TogetherNetworks\Unit;

class Map
{
    const MAX_SIZE = 255;
    const BASE_COUNT = 2;

    private $width;
    private $height;
    private $data;

    /**
     * Map constructor.
     * @param int $width
     * @param int $height
     * @param array $data
     * @throws \Exception
     */
    public function __construct(int $width, int $height, array $data)
    {
        if ($width <= 0 || $width > self::MAX_SIZE) {
            throw new \Exception('Incorrect map width.');
        }

        if ($height <= 0 || $height > self::MAX_SIZE) {
            throw new \Exception('Incorrect map height.');
        }

        $this->width = $width;
        $this->height = $height;

        if (!$this->validateMapData($data)) {
            throw new \Exception('Invalid map data.');
        }

        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    private function validateMapData(array $data)
    {
        if (count($data) !== $this->width) {
            return false;
        }

        $baseCount = 0;

        foreach ($data as $row) {

            if (count($row) !== $this->height) {
                return false;
            }

            foreach ($row as $area) {

                if (!$area instanceof Area\AbstractArea) {
                    return false;
                }

                if ($area->getUnit() instanceof Unit\Base) {
                    ++$baseCount;
                }
            }
        }

        if ($baseCount !== self::BASE_COUNT) {
            return false;
        }

        return true;
    }
}