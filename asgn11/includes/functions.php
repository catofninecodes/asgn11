<?php

const UNIT_TO_CENTIMETERS = array(
  "grains" => .7,
  "thumbLengths" => 2.1,
  "palms" => 3.3,
  "fists" => 10.4,
  "foot" => 25.0,
  "steps" => 62.5,
  "doubleSteps" => 1500,
  "rods" => 3000 
);

function convert_to_centimeters($value, $fromUnit) {
  if(array_key_exists($fromUnit, UNIT_TO_CENTIMETERS)) {
    return $value * UNIT_TO_CENTIMETERS[$fromUnit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_centimeters($value, $toUnit) {
  if(array_key_exists($toUnit, UNIT_TO_CENTIMETERS)) {
    return $value / UNIT_TO_CENTIMETERS[$toUnit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_unit($value, $fromUnit, $toUnit) {
  $centimeterValue = convert_to_centimeters($value, $fromUnit);
  $newValue = convert_from_centimeters($centimeterValue, $toUnit);
  return $newValue;
}

?>