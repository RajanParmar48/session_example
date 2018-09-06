<?php session_start();?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="style2.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="row login_box">
        <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h3>12 : 30 AM</h3></div>
            <div class="outter"><img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="image-circle"/></div>
            <h1>Hi <?=$_SESSION['email']??''?></h1>
            <span>INDIAN</span>
        </div>
        
        
        <div class="col-md-12 col-xs-12 login_control">
            <form>
                <div class="control">
                    <div class="label">Email Address</div>
                    <input type="text" class="form-control" name="email" value="<?=$_SESSION['email']??''?>"/>
                </div>
                
                <div class="control">
                    <div class="label">Password</div>
                    <input type="password" class="form-control" name="key" value="<?=$_SESSION['pass']??''?>"/>
                </div>
                <div align="center">
                    <input type="submit" name="update" class="btn btn-orange" value="UPDATE" formmethod="post" formaction="login.php">
                </div>
                <div align="center">
                    <input type="submit" name="logout" class="btn btn-orange" value="LOGOUT" formmethod="post" formaction="login.php">
                </div>
            </form>
            
        </div>
        
        
        
    </div>
</div>