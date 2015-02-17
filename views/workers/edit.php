<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 17.02.2015
 * Time: 10:57
 */
?>
<h1>Workers: edit</h1>
<form method="post" action="<?php echo URL; ?>/workers/editSave/<?php echo $this->workers['id']; ?>">
    <label>Name </label><input type="text" name="name" value="<?php echo $this->workers['name']; ?>"><br>
    <label>Soname </label><input type="text" name="soname" value="<?php echo $this->workers['soname']; ?>"><br>
    <label>Parent Name </label><input type="text" name="pname" value="<?php echo $this->workers['pname']; ?>"><br>
    <label>Start working </label><input type="date" name="start" value="<?php echo $this->workers['start']; ?>"><br>
    <label>Dolgnost </label><select name="dolgnost">
        <option <?php if ($this->workers['dolgnost'] == 'Tester') {
            echo('selected');
        } ?>>Tester
        </option>
        <option <?php if ($this->workers['dolgnost'] == 'Developer') {
            echo('selected');
        } ?>>Developer
        </option>
        <option <?php if ($this->workers['dolgnost'] == 'Designer') {
            echo('selected');
        } ?>>Designer
        </option>
        <option <?php if ($this->workers['dolgnost'] == 'PR') {
            echo('selected');
        } ?>>PR
        </option>
        <option <?php if ($this->workers['dolgnost'] == 'Mananger') {
            echo('selected');
        } ?>>Mananger
        </option>
    </select><br>
    <label>Director </label>
    <select name="dir">
        <option <?php if ($this->workers['dir'] == 'Joe') {
            echo('selected');
        } ?>>Joe
        </option>
        <option <?php if ($this->workers['dir'] == 'Kim') {
            echo('selected');
        } ?>>Kim
        </option>
        <option <?php if ($this->workers['dir'] == 'Tad') {
            echo('selected');
        } ?>>Tad
        </option>
    </select>
    <label>Address </label><input type="text" name="address" value="<?php echo $this->workers['address']; ?>"><br>
    <input type="submit">
</form>