<?php include "db.php";


function showAllData() {
    global $connection;
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

    if(!$result) {
    die('Query failed!' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];

      echo "<option value='$id'>$id</option>";         
    }

}

function createRow() {    
    
   if (isset($_POST['submit'])) {

global $connection;
$username = $_POST['username'];
$password = $_POST['password'];   
$connection =  mysqli_connect('localhost', 'root', '', 'loginapp');    

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$hashFormat = "$2y$10$";
$salt = "thisisastringthatis22c";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password, $hashF_and_salt);
    
$query = "INSERT INTO users (username, password) VALUES ('$username','$password')";
$result = mysqli_query($connection, $query);
    
if(!$result) {

        die('Query failed!' . mysqli_error());
    } else {
        echo "Record created.";
    }
}
}
    


function updateTable() {
if (isset($_POST['submit'])) {

global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE users SET ";
$query .="username ='$username', ";
$query .="password ='$password' ";
$query .="WHERE id = $id";

$result = mysqli_query($connection, $query);
if (!$result) {
    die("QUERY FAILED" . mysqli_error($connection));
} else {
    echo "Record updated.";
}
}
}

function deleteRow() {

    if (isset($_POST['submit'])) {

    global $connection;

$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];



$query = "DELETE FROM users ";
$query .="WHERE id = $id";

$result = mysqli_query($connection, $query);
if (!$result) {
    die("QUERY FAILED" . mysqli_error($connection));
} else {
    echo "Record deleted.";
}
    }
}

function readRows() {
    global $connection;

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

    if(!$result) {
    die('Query failed!' . mysqli_error());
    }
    
    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }   

}
 

?>