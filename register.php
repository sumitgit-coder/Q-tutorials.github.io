<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login and Registartion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e7be5ae91b.js" crossorigin="anonymous" name="eazy_codes"></script>
    <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .hero {
            height: 100%;
            width: 100%;
            background-image: linear-gradient(57deg, #00c6a7, #1e4d92);
            background-position: center;
            background-size: cover;
            position: absolute;
        }
        
        .form-box {
            width: 400px;
            height: 600px;
            position: relative;
            margin: 3% auto;
            background-color: #fff;
            padding: 5px;
            overflow: hidden;
            box-shadow: 6px 6px 12px #434343, -6px -6px 12px #5b5b5b;
            border-radius: 10px 10px 10px 10px;
        }
        
        .form-box:hover {
            box-shadow: inset 4px 4px 6px white, inset 0px -2px 2px white;
            transform: translate3d(-50%, -50%);
        }
        
        .button-box {
            width: 220px;
            margin: 35px auto;
            position: relative;
            box-shadow: 0 0 20px 9px #ff61241f;
            border-radius: 30px;
        }
        
        .toggle-btn {
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }
        
        #btn {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            background: linear-gradient(to right, #ff105f, #ffad06);
            border-radius: 30px;
            transition: .5s;
        }
        
        .social {
            margin: 30px auto;
            text-align: center;
            font-size: 40px;
        }
        
        .social a {
            margin: 0 12px;
            box-shadow: 0 0 20px 0 #7f7f7f3d;
            background: linear-gradient(to right, #ff105f, #ffad06);
            width: 100px;
            height: 35px;
            color: white;
            cursor: pointer;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .input-group {
            top: 120px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }
        
        .input-field {
            width: 100%;
            padding: 10px 0;
            margin: 5px 0;
            border: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
        }
        
        .submit-btn {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: linear-gradient(to right, #ff105f, #ffad06);
            border: 0;
            outline: none;
            border-radius: 30px;
        }
        
        .check-box {
            margin: 30px 10px 30px 0px;
        }
        
        span {
            color: #777;
            font-size: 12px;
            bottom: 40px;
            position: absolute;
        }
        .span2 {
            color: #777;
            font-size: 12px;
            bottom: 143px;
            position: absolute;
        }
        
        #loginForm {
            left: 50px;
        }
        
        #registerForm {
            left: 450px;
        }
        
        @media (max-width: 768px) {
            .hero {
                width: 100%;
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>

            
            
                                    <form role="form" action="signin_sub.php" id="loginForm" class="input-group" name="form2" method="post">

                                    <input type="text" class="input-field" name="n" id="name" placeholder="Enter name">

                                        <input type="email" class="input-field" name="e" id="email" placeholder="Enter your  email">


                                        <input type="password" class="input-field" name="p" id="pwd" placeholder="Enter password">

                                        <button type="submit" name="Login" class="submit-btn">Submit</button>

                                        <div class="alert alert-info" id="success" style="margin-top:10px; display:none">
                                            <strong>Success!</strong> Account Registartion successfully :)
                                        </div>
                                        <div class="alert alert-danger" id="failure" style="margin-top:10px; display:none">
                                            <strong>Does Not Match!</strong> Invaild Username Or Password
                                        </div>
                                    </form>
                                    <?php
                                    if(isset($_GET['run']) && $_GET['run']=="failed")
                                    {
                                        echo "<mark>Your email or password is not correct</mark>";
                                    }
                                    
                                    ?>
                           
                      
                                
                             
                                <form role="form" method="post" action="signup_sub.php" id="registerForm" class="input-group" name="form1"  enctype="multipart/form-data">

                                    <input type="text" class="input-field" name="n" id="name" placeholder="Enter name">


                                    <input type="email" class="input-field" name="e" id="email" placeholder="Enter email">


                                    <input type="password" class="input-field" name="p" id="pwd" placeholder="Enter password">


                                    <input type="file" class="input-field" name="img">

                                    <button type="submit"  name="submit1" class="submit-btn">Register</button>

                                    <div class="alert alert-info" id="success" style="margin-top:10px; display:none">
                                        <strong>Success!</strong> Account Registartion successfully :)
                                    </div>
                                    <div class="alert alert-danger" id="failure" style="margin-top:10px; display:none">
                                        <strong>Already Exist!</strong> This Username is Already Exist
                                    </div>
                                </form>
                                <?php
                                    if(isset($_GET['run'])&& $_GET['run']=="success") 
                                    {
                                        echo "<mark>successfully registeration</mark>";
                                    } 
                                    ?>
                            

                        
                   
                </div>
            </div>

            <?php
    if(isset($_POST["submit1"])) {
        $count = 0;
        $res=mysqli_query($link,"select * from signup where email='$_POST[email]'") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);

        if($count>0)
        {
            ?>
            <script type="text/javascript">
                
                document.getElementById("failure").style.display="block";
                document.getElementById("success").style.display="none";
            </script>
            <?php
        }
        else{
            mysqli_query($link,"insert into signup values(Null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[img]')") or die(mysqli_error($link));
            ?>
            <script type="text/javascript">
                
                document.getElementById("success").style.display="block";
                document.getElementById("failure").style.display="none";
            </script>
            <?php
        }
    }
    ?>


    <?php
    if(isset ($_POST["Login"])) 
    {
        $count=0;
        $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'");

        $count=mysqli_num_rows($res);

        if($count==0)
        {
            ?>
            <script type="text/javascript">
            document.getElementById("failure").style.display="block";
            </script>
            <?php

        }else {

            $_SESSION["username"]=$_POST["username"];
        ?>
        <script type="text/javascript">
            window.location="home.php";
        </script>
        <?php
    }
}
    ?>

    <script>
        var x = document.getElementById("loginForm");
        var y = document.getElementById("registerForm");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "-400px";
            z.style.left = "0px";
        }
    </script>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>