<?php
include 'common.php';
if (!isset($_SESSION["email"]))
 {
    header('location:settings.php');
}

$old_pass = $_POST['old_password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);

$new_pass = $_POST['new_password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);

$rep_pass = $_POST['repnew_password'];
$rep_pass = mysqli_real_escape_string($con, $rep_pass);

$query = "SELECT password FROM users WHERE email = '".$_SESSION['email']."' ";
$result = mysqli_query($con, $query);//or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if ($new_pass != $rep_pass) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $rep_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
  }

?>
