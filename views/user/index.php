<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 16.02.2015
 * Time: 17:24
 */
?>
<h1>User</h1>
<form method="post" action="<?php echo URL; ?>/user/create">
    <label>Login</label><input type="text" name="login"><br>
    <label>Password</label><input type="text" name="password"><br>
    <label>Role</label>
    <select name="role">
        <option value="default">Default</option>
        <option value="admin">Admin</option>
    </select><br>
    <label> </label><input type="submit">
</form>
<hr>
<table>
    <?php foreach ($this->userList as $key => $value): ?>
    <tr>
        <td><a href="' . URL . '/user/edit/' . $value['id'] . '">Edit</a>
            <a href="' . URL . '/user/delete/' . $value['id'] . '">Delete</a>
        </td>
        <br>

        <?php endforeach ?>
</table>
