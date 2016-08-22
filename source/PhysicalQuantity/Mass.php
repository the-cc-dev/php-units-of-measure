<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;
use PhpUnitsOfMeasure\HasSIUnitsTrait;

class Mass extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        $newUnit = UnitOfMeasure::nativeUnitFactory('kg');
        $newUnit->addAlias('kilogram');
        $newUnit->addAlias('kilograms');
        static::addUnit($newUnit);
        static::addMissingSIPrefixedUnits(
            $newUnit,
            0.001,
            '%pg',
            [
                '%Pgram',
                '%Pgrams',
            ]
        );

        $newUnit = UnitOfMeasure::linearUnitFactory('t', 1e3);
        $newUnit->addAlias('ton');
        $newUnit->addAlias('tons');
        $newUnit->addAlias('tonne');
        $newUnit->addAlias('tonnes');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('lb', 4.5359237e-1);
        $newUnit->addAlias('lbs');
        $newUnit->addAlias('pound');
        $newUnit->addAlias('pounds');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('oz', (4.5359237e-1 / 16));
        $newUnit->addAlias('ounce');
        $newUnit->addAlias('ounces');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('st', (4.5359237e-1 * 14));
        $newUnit->addAlias('stone');
        $newUnit->addAlias('stones');
        static::addUnit($newUnit);

    }
}
