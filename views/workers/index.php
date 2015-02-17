<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 17.02.2015
 * Time: 10:57
 */
?>
<h1>Add new user</h1>
<form method="post" action="<?php echo URL; ?>/workers/create">
    <label>Name</label><input type="text" name="name"><br>
    <label>Soname</label><input type="text" name="soname"><br>
    <label>Parent name</label><input type="text" name="pname"><br>
    <label>Start working</label><input type="date" name="start"><br>
    <label>Working type</label><input type="text" name="dolgnost"><br>
    <label>Dolgnost </label>
    <select name="dolgnost">
        <option>Tester</option>
        <option>Developer</option>
        <option>Designer</option>
        <option>PR</option>
        <option>Mananger</option>
    </select><br>
    <label>Director </label>
    <select name="dir">
        <option>Joe</option>
        <option>Kim</option>
        <option>Tad</option>
    </select><br>
    <label>Address</label><input type="text" name="address"><br>
    <input type="submit">
</form>
<hr>
<table>
    <?php foreach ($this->userList as $key => $value): ?>
    <tr>
        <td>
            <a href="<?php echo URL; ?>/workers/fullinfo/<?php echo $value['id']; ?>">
                <?= $value['name'] ?>
                <?= $value['soname'] ?>
                <?= $value['pname'] ?>
            </a>
            <a href="<?php echo URL; ?>/workers/edit/<?php echo $value['id']; ?>">Edit</a>
            <a href="<?php echo URL; ?>/workers/delete/<?php echo $value['id']; ?>">Delete</a>
        </td>
        <br>

        <?php endforeach; ?>
</table>
