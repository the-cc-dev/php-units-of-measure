<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;
use PhpUnitsOfMeasure\HasSIUnitsTrait;

class Length extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        $newUnit = UnitOfMeasure::nativeUnitFactory('m');
        $newUnit->addAlias('meter');
        $newUnit->addAlias('meters');
        $newUnit->addAlias('metre');
        $newUnit->addAlias('metres');
        static::addUnit($newUnit);
        static::addMissingSIPrefixedUnits(
            $newUnit,
            1,
            '%pm',
            [
                '%Pmeter',
                '%Pmeters',
                '%Pmetre',
                '%Pmetres',
            ]
        );

        $newUnit = UnitOfMeasure::linearUnitFactory('ft', 0.3048);
        $newUnit->addAlias('foot');
        $newUnit->addAlias('feet');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('in', 0.0254);
        $newUnit->addAlias('inch');
        $newUnit->addAlias('inches');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('mi', 1609.344);
        $newUnit->addAlias('mile');
        $newUnit->addAlias('miles');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('yd', 0.9144);
        $newUnit->addAlias('yard');
        $newUnit->addAlias('yards');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('M', 1852);
        $newUnit->addAlias('nautical mile');
        $newUnit->addAlias('nautical miles');
        $newUnit->addAlias('nmi');
        $newUnit->addAlias('NM');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('mil', 10000);
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('AU', 149597870700);
        $newUnit->addAlias('au');
        $newUnit->addAlias('astronomical unit');
        $newUnit->addAlias('astronomical units');
        static::addUnit($newUnit);

    }
}
