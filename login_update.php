<?php   include "db.php";
        include "functions.php";
        include "includes/header.php";
        updateTable();
?>      




<div class="container">
    <div class="col-xs-6">
        <form action="login_update.php" method="post">


            <div class="form-group">
            <label for="username">Username</label>
                <input type="text" name="username" class="form-control">               
            </div> 

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">               
            </div> 
            
            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            
            <div class="form-group">
                <select name="id" id="">
                <?php 
                    showAllData();                            
                ?>        
                  
                </select>
            </div>        
        </form>    
    </div>
    
    <?php include "includes/footer.php";?>