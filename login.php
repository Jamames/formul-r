<?php
if ( $_POST["name"] == "Johan" && $_POST["password"] == "test") {
    header("location: welcome.php");
}

else {
    header("location: fuckoff.php");
}