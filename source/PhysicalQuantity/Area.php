<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;

class Area extends AbstractPhysicalQuantity
{
    protected static $unitDefinitions;

    protected static function initialize()
    {
        $newUnit = UnitOfMeasure::nativeUnitFactory('m^2');
        $newUnit->addAlias('m²');
        $newUnit->addAlias('meter squared');
        $newUnit->addAlias('square meter');
        $newUnit->addAlias('square meters');
        $newUnit->addAlias('meters squared');
        $newUnit->addAlias('metre squared');
        $newUnit->addAlias('metres squared');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('mm^2', 1e-6);
        $newUnit->addAlias('mm²');
        $newUnit->addAlias('millimeter squared');
        $newUnit->addAlias('square millimeter');
        $newUnit->addAlias('square millimeters');
        $newUnit->addAlias('millimeters squared');
        $newUnit->addAlias('millimetre squared');
        $newUnit->addAlias('millimetres squared');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('cm^2', 1e-4);
        $newUnit->addAlias('cm²');
        $newUnit->addAlias('centimeter squared');
        $newUnit->addAlias('square centimeter');
        $newUnit->addAlias('square centimeters');
        $newUnit->addAlias('centimeters squared');
        $newUnit->addAlias('centimetre squared');
        $newUnit->addAlias('centimetres squared');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('dm^2', 1e-2);
        $newUnit->addAlias('dm²');
        $newUnit->addAlias('decimeter squared');
        $newUnit->addAlias('square decimeters');
        $newUnit->addAlias('square decimeter');
        $newUnit->addAlias('decimeters squared');
        $newUnit->addAlias('decimetre squared');
        $newUnit->addAlias('decimetres squared');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('km^2', 1e6);
        $newUnit->addAlias('km²');
        $newUnit->addAlias('kilometer squared');
        $newUnit->addAlias('kilometers squared');
        $newUnit->addAlias('square kilometer');
        $newUnit->addAlias('square kilometers');
        $newUnit->addAlias('kilometre squared');
        $newUnit->addAlias('kilometres squared');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('ft^2', 9.290304e-2);
        $newUnit->addAlias('ft²');
        $newUnit->addAlias('foot squared');
        $newUnit->addAlias('square foot');
        $newUnit->addAlias('square feet');
        $newUnit->addAlias('feet squared');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('in^2', 6.4516e-4);
        $newUnit->addAlias('in²');
        $newUnit->addAlias('inch squared');
        $newUnit->addAlias('square inch');
        $newUnit->addAlias('square inches');
        $newUnit->addAlias('inches squared');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('mi^2', 2.589988e6);
        $newUnit->addAlias('mi²');
        $newUnit->addAlias('mile squared');
        $newUnit->addAlias('miles squared');
        $newUnit->addAlias('square mile');
        $newUnit->addAlias('square miles');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('yd^2', 8.361274e-1);
        $newUnit->addAlias('yd²');
        $newUnit->addAlias('yard squared');
        $newUnit->addAlias('yards squared');
        $newUnit->addAlias('square yard');
        $newUnit->addAlias('square yards');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('a', 100);
        $newUnit->addAlias('are');
        $newUnit->addAlias('ares');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('daa', 1000);
        $newUnit->addAlias('decare');
        $newUnit->addAlias('decares');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('ha', 10000);
        $newUnit->addAlias('hectare');
        $newUnit->addAlias('hectares');
        static::addUnit($newUnit);

        $newUnit = UnitOfMeasure::linearUnitFactory('ac', 4046.8564224);
        $newUnit->addAlias('acre');
        $newUnit->addAlias('acres');
        static::addUnit($newUnit);

    }
}
