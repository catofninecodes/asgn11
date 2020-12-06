<?php

require_once('includes/functions.php');
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

<?php include_once 'includes/header.php'; ?>

    <div id="main-content">
      <h1>Volumizer</h1>
      <form action="" method="post">
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="fromValue" value="<?php echo $fromValue; ?>">&nbsp;
          
          <select name="fromUnit">
            <option value="grains"<?php if($fromUnit == 'grains') { echo " selected"; } ?>>Grains</option>
            <option value="thumbLengths"<?php if($fromUnit == 'thumbLengths') { echo " selected"; } ?>>Thumb-Lengths</option>
            <option value="Palms"<?php if($fromUnit == 'palms') { echo " selected"; } ?>>Palms</option>
            <option value="Fists"<?php if($fromUnit == 'fists') { echo " selected"; } ?>>Fists</option>
            <option value="Foot"<?php if($fromUnit == 'foot') { echo " selected"; } ?>>Foot</option>
            <option value="step"<?php if($fromUnit == 'steps') { echo " selected"; } ?>>Steps</option>
            <option value="doubleSteps"<?php if($fromUnit =='doubleSteps') {echo " selected"; } ?>>Double-Steps</option>
            <option value="rods"<?php if($fromUnit == 'rods') { echo " selected"; } ?>>Rods</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="toValue" value="<?php echo $toValue; ?>">&nbsp;
          <select name="toUnit">
            <option value="grains"<?php if($toUnit == 'grains') { echo " selected"; } ?>>Grains</option>
            <option value="thumbLengths"<?php if($toUnit == 'thumbLengths') { echo " selected"; } ?>>Thumb-Lengths</option>
            <option value="palms"<?php if($toUnit == 'palms') { echo " selected"; } ?>>Palms</option>
            <option value="fists"<?php if($toUnit == 'fists') { echo " selected"; } ?>>Fists</option>
            <option value="foot"<?php if($toUnit == 'foot') { echo " selected"; } ?>>Foot</option>
            <option value="steps"<?php if($toUnit == 'steps') { echo " selected"; } ?>>Steps</option>
            <option value="doubleSteps"<?php if($fromUnit == 'doubleSteps') { echo " selected"; } ?>>Double-Steps</option>
            <option value="rods"<?php if($fromUnit == 'rods') { echo " selected"; } ?>>Rods</option>
          </select>
        </div>
        <input type="submit" name="submit" value="Submit">
      </form>
      <br>
      <a href="index.php">Return to Menu</a>
    </div>
  </body>

<?php include_once 'includes/footer.php'; ?>
  
</html>