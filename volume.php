<?php

require_once('includes/functions.php');

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
  
  $to_value = convert_volume($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Convert Volume</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Convert Volume</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>">&nbsp;
          <select name="from_unit">
            <option value="bucket"<?php if($from_unit == 'bucket') { echo " selected"; } ?>>bucket</option>
            <option value="butt"<?php if($from_unit == 'butt') { echo " selected"; } ?>>butt</option>
            <option value="firkin"<?php if($from_unit == 'firkin') { echo " selected"; } ?>>firkin</option>
            <option value="hogshead"<?php if($from_unit == 'hogshead') { echo " selected"; } ?>>hogshead</option>
            <option value="gallon"<?php if($from_unit == 'gallon') { echo " selected"; } ?>>gallon</option>
            <option value="pint"<?php if($from_unit == 'pint') { echo " selected"; } ?>>pint</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>">&nbsp;
          <select name="to_unit">
            <option value="bucket"<?php if($to_unit == 'bucket') { echo " selected"; } ?>>bucket</option>
            <option value="butt"<?php if($to_unit == 'butt') { echo " selected"; } ?>>butt</option>
            <option value="firkin"<?php if($to_unit == 'firkin') { echo " selected"; } ?>>firkin</option>
            <option value="hogshead"<?php if($to_unit == 'hogshead') { echo " selected"; } ?>>hogshead</option>
            <option value="gallon"<?php if($to_unit == 'gallon') { echo " selected"; } ?>>gallon</option>
            <option value="pint"<?php if($to_unit == 'pint') { echo " selected"; } ?>>pint</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit">
      </form>
  
      <br>
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
