<?php
include("header.html");

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $c = mysqli_connect("localhost", "root", "", "lo");
    $m = mysqli_query($c, "SELECT * FROM `login` WHERE `email`='$email' and `password`='$password'");
    mysqli_close($c);

    $r = mysqli_fetch_array($m);
    if ($r) {
        echo("شما با موفقیت وارد شدید");
    } else {
        echo("ایمیل یا رمز عبور صحیح نیست");
    }
} else {
    echo "لطفاً ایمیل و رمز عبور را وارد کنید.";
}


include("footer.html");
?>
