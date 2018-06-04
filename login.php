<?php 

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
        echo "we are connected";
    } else {
        die("Database connection failed");
    };

}

 /* 

    if($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo "No username or password given.";
    }

 
} */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="container">
    <div class="col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
                <input type="text" name="username" class="form-control">               
            </div> 

            <div class="form-group">
            <label for="password">Password</label>
                <input type="password" name="password" class="form-control">               
            </div> 
            
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        
        
        </form>
    
    </div>

</div>
    
</body>
</html>