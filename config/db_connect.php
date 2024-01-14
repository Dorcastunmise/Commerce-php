<?php 
    # Database connection
    $conn = mysqli_connect('localhost', 'Oluwatunmise', 'Everlastingjoy69', 'pizza palace');

    # Checks connection
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>