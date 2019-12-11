<?php

//Imperial Gallons

const LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS = array(
  "bucket" => 4,
  "butt" => 108,
  "firkin" => 9,
  "hogshead" => 54,
  "pint" => 0.125,
  "gallon" => 1,
);

function convert_to_gallon($value, $from_unit) 
{
  if(array_key_exists($from_unit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS))
  {
    return $value * LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$from_unit];
  }
    else
    {
      return "Unsupported unit.";
    } 
}

function convert_from_gallon($value, $to_unit) 
{
  if(array_key_exists($to_unit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) 
  {
    return $value / LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$to_unit];
  }
    else
    {
      return "Unsupported unit.";
    } 
}

function convert_volume($value, $from_unit, $to_unit) {
  $gallon_value = convert_to_gallon($value, $from_unit);
  $new_value = convert_from_gallon($gallon_value, $to_unit);
  return $new_value;
}

//Irish Lengths

const IRISH_LENGTH_TO_CENTIMETERS = array(
  "grain" => .7,
  "thumb-length" => 2.1,
  "palm" => 3.3,
  "fist" => 10.4,
  "foot" => 25.0,
  "centimeter" => 1,
  "step" => 62.5,
  "double-step" => 1500,
  "rod" => 3000
);

function convert_to_centimeters($value, $from_unit) 
{
  if(array_key_exists($from_unit, IRISH_LENGTH_TO_CENTIMETERS)) 
    {
      return $value * IRISH_LENGTH_TO_CENTIMETERS[$from_unit];
    }
      else
      {
        return "Unsupported unit.";
      }      
}

function convert_from_centimeters($value, $to_unit) 
{
  if(array_key_exists($to_unit, IRISH_LENGTH_TO_CENTIMETERS)) 
  {
  return $value / IRISH_LENGTH_TO_CENTIMETERS[$to_unit];
  }
  else
  {
    return "Unsupported unit.";
  }      
}


function convert_irish_length($value, $from_unit, $to_unit) 
{
  $centimeter_value = convert_to_centimeters($value, $from_unit);
  $new_value = convert_from_centimeters($centimeter_value, $to_unit);
  return $new_value;
}


?>