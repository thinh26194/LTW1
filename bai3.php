<html>
    <meta charset="UTF-8">
    <form method="POST">

        Name: <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"/><br/><br/>
        E-mail: <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" /><br/><br/>
        Website: <input type="text" name="website" value="<?php echo isset($_POST['website']) ? $_POST['website'] : '' ?>" /><br/><br/>
        Comment:<br/> <textarea cols="30" rows="5" name="comment"><?php echo isset($_POST['comment']) ? $_POST['comment'] : '' ?></textarea><br/><br/>
        <input type="radio" name="gender"
               <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="Female"> Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="Male"> Male



        <input type="submit">
        <h4>Thông Tin Người Nhập</h4>

    </form>
</html>
<?php
if (empty($_POST['name'])) {
    echo 'Fill name' . '<br/>' . '<br/>';
} else {
    echo 'Name: ' . $_POST['name'] . '<br/>' . '<br/>';
}

if (empty($_POST['email'])) {
    echo 'Fill email' . '<br/>' . '<br/>';
} else {
    echo 'Email: ' . $_POST['email'] . '<br/>' . '<br/>';
}

if (empty($_POST['website'])) {
    echo 'Fill website' . '<br/>' . '<br/>';
} else {
    echo 'Website: ' . $_POST['website'] . '<br/>' . '<br/>';
}

if (empty($_POST['comment'])) {
    echo 'Fill comment' . '<br/>' . '<br/>';
} else {
    echo 'Comment: ' . $_POST['comment'] . '<br/>' . '<br/>';
}

if (empty($_POST['gender'])) {
    echo 'Fill check gender' . '<br/>' . '<br/>';
} else {
    echo 'Gender: ' . $_POST['gender'] . '<br/>' . '<br/>';
}
?>
        







