<?php

/**
 * Test task for Together Networks
 * @author Stanislav Chertilin <staschertilin@gmail.com>
 */

namespace TogetherNetworks\Map;

use TogetherNetworks\Area;
use TogetherNetworks\Unit;

class Renderer
{
    public function render(Map $map)
    {
        $output = '<table>';

        $mapData = $map->getData();

        foreach ($mapData as $row) {

            $output .= '<tr>';

            foreach ($row as $column) {
                $output .= '<td>';

                $output .= '<strong>' . $this->getAreaName($column) . '</strong>';

                $unit = $column->getUnit();
                $unitName = $this->getUnitName($unit);

                if (!empty($unitName)) {
                    $output .= ' with <i>' . $unitName . '</i>';
                }

                $output .= '</td>';
            }

            $output .= '</tr>';
        }

        $output .= '</table>';

        return $output;
    }

    private function getAreaName(Area\AbstractArea $area)
    {
        if ($area instanceof Area\Mountain) {
            return 'Mountain';
        }

        if ($area instanceof Area\Plain) {
            return 'Plain';
        }

        if ($area instanceof Area\Swamp) {
            return 'Swamp';
        }

        if ($area instanceof Area\Water) {
            return 'Water';
        }

        return 'Unknown';
    }

    private function getUnitName(Unit\AbstractUnit $unit)
    {
        if ($unit instanceof Unit\Aircraft) {
            return 'Aircraft';
        }

        if ($unit instanceof Unit\Base) {
            return 'Base';
        }

        if ($unit instanceof Unit\Equipment) {
            return 'Equipment';
        }

        if ($unit instanceof Unit\Human) {
            return 'Human';
        }

        return '';
    }
}