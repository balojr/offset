<?php 
    $userUsername = filter_input(INPUT_POST, 'username');
    $userPassword = filter_input(INPUT_POST, 'password');

    if (!empty($userUsername) || !empty($userPassword)) {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'classproject'; 

        $conn = new mysqli($host, $username, $password, $database);

        if (mysqli_connect_error()) {
            die('Connect Error (' .mysqli_connect_errno().')' .mysqli_connect_error());
        } else {
            $sql = "INSERT INTO project(username, passcode) VALUES ('$userUsername', '$userPassword')";
            if ($conn->query($sql)){
                echo 'User Added ';

            } else {
                echo 'Error: ' . $sql . '<br>' . $conn->error;
            }
            header("Location: displaydata.php");
            $conn->close();
        }
    } else {
        echo 'Input your data again!';
        die();
    }
