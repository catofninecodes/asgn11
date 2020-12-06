<?php

require_once('includes/liquids-functions.php');
$fromValue = '';
$fromUnit = '';
$toUnit = '';
$toValue = '';

if($_POST['submit']) {
  $fromValue = $_POST['fromValue'];
  $fromUnit = $_POST['fromUnit'];
  $toUnit = $_POST['toUnit'];
  
  $toValue = convert_unit($fromValue, $fromUnit, $toUnit);
}

?>

<!DOCTYPE html>

<?php include_once 'includes/header.php'; ?>

    <div id="main-content">
      <h1>Volumizer</h1>
      <form action="" method="post">
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>">&nbsp;
          
          <select name="fromUnit">
            <option value="buckets"<?php if($fromUnit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($fromUnit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkins"<?php if($fromUnit == 'firkins') { echo " selected"; } ?>>Firkins</option>
            <option value="hogsheads"<?php if($fromUnit == 'hogsheads') { echo " selected"; } ?>>Hogs Heads</option>
            <option value="impGallons"<?php if($fromUnit == 'impGallons') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="pints"<?php if($fromUnit == 'pints') { echo " selected"; } ?>>Pints</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>">&nbsp;
          <select name="toUnit">
            <option value="buckets"<?php if($toUnit == 'buckets') { echo " selected"; } ?>>Buckets</option>
            <option value="butts"<?php if($toUnit == 'butts') { echo " selected"; } ?>>Butts</option>
            <option value="firkins"<?php if($toUnit == 'firkins') { echo " selected"; } ?>>Firkins</option>
            <option value="hogsheads"<?php if($toUnit == 'hogsheads') { echo " selected"; } ?>>Hogs Heads</option>
            <option value="impGallons"<?php if($toUnit == 'impGallons') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="pints"<?php if($toUnit == 'pints') { echo " selected"; } ?>>Pints</option>
          </select>
        </div>
        <input type="submit" name="submit" value="Submit">
      </form>
      <br>
      <a href="index.php">Return to Menu</a>
    </div>
  </body>

<?php include_once 'includes/footer.php'; >
  
</html>
