<?php
// ============================================================================
// WARNING! - This file and others like it are auto-generated by the build
// script.  Please do not edit it directly.  See the unitsofmeasure.yml file
// in the project root, and the build tooling in the /build directory.
// ============================================================================

namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class Velocity extends AbstractPhysicalQuantity
{
    protected static $unitDefinitions;

    protected static function initialize()
    {
        $newUnit = UnitOfMeasure::nativeUnitFactory('m/s');
        $newUnit->addAlias('meters/sec');
        $newUnit->addAlias('meters per second');
        $newUnit->addAlias('meter per second');
        $newUnit->addAlias('metres per second');
        $newUnit->addAlias('metre per second');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('km/h', 0.277778);
        $newUnit->addAlias('km/hour');
        $newUnit->addAlias('kilometer per hour');
        $newUnit->addAlias('kilometers per hour');
        $newUnit->addAlias('kilometre per hour');
        $newUnit->addAlias('kilometres per hour');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('ft/s', 0.3048);
        $newUnit->addAlias('feet/sec');
        $newUnit->addAlias('feet per second');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('mph', 0.44704);
        $newUnit->addAlias('miles/hour');
        $newUnit->addAlias('miles per hour');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('knot', 0.514444);
        $newUnit->addAlias('knots');
        static::addUnit($newUnit);

    }
}
