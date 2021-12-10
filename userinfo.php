<?php

$con = mysqli_connect('localhost','root');

if ($con) {
    echo "Connection successful";
}else {
    echo "No connection";
}

mysqli_select_db($con,'portfolio');

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$message = "Kuch Bhi!";

$query = " insert into userdata (name, email, comments) values ('$name','$email','$comments')";
// values ('$name','$email','$comments')";

// echo "$query";

mysqli_query($con,$query);
// mysqli_query($con,$query);

// header('location:index.php');


?>