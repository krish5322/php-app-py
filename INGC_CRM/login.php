<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">

    <title>Document</title>
</head>
<body>

<?php

session_start();


if(isset($_SESSION['invalid']))
{
echo '<p>invalid credentials</p>';
}

?>

<div class="w-50 col-lg-12 mx-auto mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">LOGIN</h4>
                                <div class="basic-form">
                                    <form action="login-logic.php" method="post">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                       
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">LOGIN</button>
                                            </div class="col-sm-10">
                                        </div>
                                        <div class="registerlink">
                                               <p>Not Registered yet?</p> <a  href="register.php">REGISTER HERE</a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    
</body>
</html>