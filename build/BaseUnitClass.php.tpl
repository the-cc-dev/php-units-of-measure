<?php
// If this is the first time this template has been loaded, define some functions
if (!defined('TEMPLATE_FUNCTIONS_LOADED')) {
    define(TEMPLATE_FUNCTIONS_LOADED, true);

    function printAddAliases($unit_definition) {
        foreach ($unit_definition['names'] as $index => $unit) {
            if ($index == 0) {
                continue;
            } ?>
        $newUnit->addAlias('<?=$unit?>');
<?php   }
    }

    function printSiUnits($unit_definition) {
        if (array_key_exists('metric_prefixes', $unit_definition)) {?>
        static::addMissingSIPrefixedUnits(
            $newUnit,
            <?=$unit_definition['metric_prefixes']['si_unit_scaling_factor']?>,
            '<?=$unit_definition['metric_prefixes']['patterns'][0]?>',
            [
<?php       foreach ($unit_definition['metric_prefixes']['patterns'] as $index => $pattern) {
                if ($index == 0) {
                    continue;
                } ?>
                '<?=$pattern?>',
<?php       } ?>
            ]
        );
<?php   }
    }

    function printAdditionalUnitFactory($unit_definition) {
        if (array_key_exists('constant', $unit_definition)) { ?>
        $newUnit = UnitOfMeasure::linearUnitFactory('<?=$unit_definition['names'][0]?>', <?=$unit_definition['constant']?>);
<?php   } else { ?>
        $newUnit = new UnitOfMeasure(
            '<?=$unit_definition['names'][0]?>',
            function ($x) {
                return <?=$unit_definition['formula']?>;
            },
            function ($x) {
                return "something has to happen here";
            }
        );
<?php   }
    }
}

// --- Here starts the generated class file template
?>
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;
<?php if ($data['has_metric_prefixes']) {?>
use PhpUnitsOfMeasure\HasSIUnitsTrait;
<?php } ?>

class <?=$data['name']?> extends AbstractPhysicalQuantity
{
<?php if ($data['has_metric_prefixes']) {?>
    use HasSIUnitsTrait;

<?php } ?>
    protected static $unitDefinitions;

    protected static function initialize()
    {
        $newUnit = UnitOfMeasure::nativeUnitFactory('<?=$data['si_unit']['names'][0]?>');
<?php printAddAliases($data['si_unit']);?>
        static::addUnit($newUnit);
<?php printSiUnits($data['si_unit']);?>

<?php foreach ($data['interpreted_conversion_factors'] as $factor) {
    printAdditionalUnitFactory($factor);
    printAddAliases($factor); ?>
        static::addUnit($newUnit);

<?php printSiUnits($factor);?>
<?php } ?>
    }
}
