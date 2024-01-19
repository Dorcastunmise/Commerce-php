<?php 
    # Database connection
    # mysqli_connect('hostname', 'username', 'password', 'dbName')
    $conn = mysqli_connect('localhost', 'Oluwatunmise', 'Everlastingjoy69', 'pizza palace');

    # Checks connection
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
    # or
    /*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully"; */

    # PDO (PHP data objects)
    /*Connecting to PDO Databases
PDO stands for PHP Data Objects and is a consistent way to access databases, which promises much easier portable code. PDO
is more like a data access layer which uses a unified API rather than an abstraction layer. The syntax for connecting to a database
using PDO is:
$username = "your_name";
$password = "your_password";
$hostname = "localhost";


// try to create connection
try {
$dbConnect = new PDO("mysql:host=$hostname;dbname=myDB", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
// show an error if the connection was unsuccessful
catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
PDO is widely used today for a bunch of advantages it offers. Among them, we can mention that PDO allows for prepared
statements and rollback functionality which makes it really consistent, it throws catchable exceptions which means better error
handling and uses blind parameters in statements which increases security*/

?>