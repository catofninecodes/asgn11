<?php

const LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS = array(
  "buckets" => 4,
  "butts" => 108,
  "firkins" => 9,
  "hogsheads" => 54,
  "pints" => 0.25
);

function convert_to_gallons($value, $fromUnit) {
  if(array_key_exists($fromUnit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
    return $value * LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$fromUnit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_gallons($value, $toUnit) {
  if(array_key_exists($toUnit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
    return $value / LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$toUnit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_unit($value, $fromUnit, $toUnit) {
  $gallonValue = convert_to_gallons($value, $fromUnit);
  $newValue = convert_from_gallons($gallonValue, $toUnit);
  return $newValue;
}

?>