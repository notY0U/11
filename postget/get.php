<?php
session_start();


// _dc($_GET);
if(isset($_SESSION['fm'])) {
    echo '<h1 style="color:yellow">'.$_SESSION['fm'].'</h1>';
    unset($_SESSION['fm']);
}


if(isset($_GET['firstname'])) {
    echo '<h1 style="color:red">'.$_GET['firstname'].'</h1>';
}

if(isset($_POST['firstname'])) {
    // echo '<h1 style="color:blue">'.$_POST['firstname'].'</h1>';
    $_SESSION['fm'] = $_POST['firstname'];
    header('Location: http://localhost/11/postget/get.php');
    die();
}





?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="" method="POST">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>