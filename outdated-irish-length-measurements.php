<?php

function convert_to_centimeter($value, $from_unit) {
  switch($from_unit) {
    case 'grain':
      return $value * .7;
      break;
    case 'thumb-length':
      return $value * 2.1;
      break;
    case 'palm':
      return $value * 3.3;
      break;
    case 'fist':
      return $value * 10.4;
      break;
    case 'foot':
      return $value * 25.0;
      break;
    case 'centimeter':
      return $value;
      break;
    case 'step':
      return $value * 62.5;
      break;
    case 'double-step':
      return $value * 1500;
      break;
    case 'rod':
      return $value * 3000;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_from_centimeter($value, $to_unit) {
  switch($to_unit) {
    case 'grain':
      return $value / .7;
      break;
    case 'thumb-length':
      return $value / 2.1;
      break;
    case 'palm':
      return $value / 3.3;
      break;
    case 'fist':
      return $value / 10.4;
      break;
    case 'foot':
      return $value / 25.0;
      break;
    case 'centimeter':
      return $value;
      break;
      case 'step':
      return $value * 62.5;
      break;
    case 'double-step':
      return $value * 1500;
      break;
    case 'rod':
      return $value * 3000;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_irish_length($value, $from_unit, $to_unit) {
  $meter_value = convert_to_meters($value, $from_unit);
  $new_value = convert_from_meters($meter_value, $to_unit);
  return $new_value;
}

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(!isset($_POST['submit'])) {
    $_POST['submit'] = '';
}

if($_POST['submit']) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_irish_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Convert Irish Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Irish Length</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>">&nbsp;
          <select name="from_unit">
            <option value="grain"<?php if($from_unit == 'grain') { echo " selected"; } ?>>grain</option>
            <option value="thumb-length"<?php if($from_unit == 'thumb-length') { echo " selected"; } ?>>thumb-length</option>
            <option value="palm"<?php if($from_unit == 'palm') { echo " selected"; } ?>>palm</option>
            <option value="fist"<?php if($from_unit == 'fist') { echo " selected"; } ?>>fist</option>
            <option value="foot"<?php if($from_unit == 'foot') { echo " selected"; } ?>>foot</option>
            <option value="step"<?php if($from_unit == 'step') { echo " selected"; } ?>>step</option>
            <option value="double-step"<?php if($from_unit == 'double-step') { echo " selected"; } ?>>double-step</option>
            <option value="rod"<?php if($from_unit == 'rod') { echo " selected"; } ?>>rod</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>">&nbsp;
          <select name="to_unit">
            <option value="grain"<?php if($to_unit == 'grain') { echo " selected"; } ?>>grain</option>
            <option value="thumb-length"<?php if($to_unit == 'thumb-length') { echo " selected"; } ?>>thumb-length</option>
            <option value="palm"<?php if($to_unit == 'palm') { echo " selected"; } ?>>palm</option>
            <option value="fist"<?php if($to_unit == 'fist') { echo " selected"; } ?>>fist</option>
            <option value="foot"<?php if($to_unit == 'foot') { echo " selected"; } ?>>foot</option>
            <option value="step"<?php if($to_unit == 'step') { echo " selected"; } ?>>step</option>
            <option value="double-step"<?php if($to_unit == 'double-step') { echo " selected"; } ?>>double-step</option>
            <option value="rod"<?php if($to_unit == 'rod') { echo " selected"; } ?>>rod</option>
          </select>
          
        </div>
        <input type="submit" name="submit" value="Submit">
      </form>
  
      <br>
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>