<?php
session_start();
if(isset($_SESSION['test'])){
    header("Location: ./product.php");
    die();
}
echo "
    <form method='post' action = './product.php'>
        <label>Type your name</lable><br>
        <input type='text' name='username'><br>
        <label>Type your password</lable><br>
        <input type='text' name='password'><br>
        <input type='submit' value='skicka' name='submit'>
    </form>


";

?>