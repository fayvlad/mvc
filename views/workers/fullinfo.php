<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 17.02.2015
 * Time: 10:57
 */
?>
<style type="text/css">
    label {
        font-weight: bold;
    }
</style>
<h1>User: Full Info</h1>

<label>Name </label><?php echo $this->workers['name']; ?><br>
<label>Soname </label><?php echo $this->workers['soname']; ?><br>
<label>Parent Name </label><?php echo $this->workers['pname']; ?><br>
<label>Start working </label><?php echo $this->workers['start']; ?><br>
<label>Dolgnost </label><?php echo $this->workers['dolgnost']; ?><br>
<label>Director </label><?php echo $this->workers['dir']; ?><br>
<label>Address </label><?php echo $this->workers['address']; ?><br>
