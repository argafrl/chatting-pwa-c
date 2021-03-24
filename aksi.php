<?php
    session_start();
    $usernameInput = $_GET['username'];
    $passwordInput = $_GET['password'];
    $file = fopen('login.txt', 'r');
    $isLoggedIn=false;
    while(!feof($file)){
        $line = fgets($file);
        list($user, $pass) = explode(';', $line);
        if ($usernameInput == '' && $passwordInput == ''){
            header("Location:index.html");
        }
        elseif(trim($user) == $usernameInput && trim($pass) == $passwordInput){
            $isLoggedIn=true;
            $_SESSION['isLoggedIn'] = true;
            header("Location:chat.php");
            break;
        } else {
            echo "<script>
            alert('Username or Password is incorrect, please try again.');
            window.location.href='./index.html';
            </script>";
        }
    }
?>