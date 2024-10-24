<?php

// if (isset($_POST['username'])) {
//     $username = $_POST['username'];
//     echo "Hello, $username!";
// }




if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Hello, $username!";
}
