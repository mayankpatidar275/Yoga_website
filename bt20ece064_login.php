

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="bt20ece064_login.css">  
</head>    
<body>    
    <h2>Login</h2><br>    
    <div class="login">
    
    <?php
    echo "You have registered using following information";
    echo "<br>";
    $id_mail = $_COOKIE['user_email'];
    $id_pass = $_COOKIE['user_pass'];
    // $value = $_POST['Uname'];
    echo "E-mail";
    echo "- ";
    echo $id_mail;
    echo "<br>";
    echo "Password";
    echo "- ";
    echo $id_pass;
    echo "<br>";
    echo "<br>";    
    // if($id_mail==$value){        
    //     echo '<form name= "myform" id="login" action="index.php" method="post">';
    //     // $action = "index.php"; 
    // }
    // else{
    //     echo '<form name= "myform" id="login" action="bt20ece064.php" method="post">';
    //     // $action ="bt20ece064.php";
    // }
    // echo $id_mail;
    // echo $value;
    ?>
        <form name= "myform" id="login" action="bt20ece064.php" method="post">
        <label><b>User Name / E-mail    
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username / Email">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="checkbox" id="check">    
        <span style="color:black;">Remember me</span>    
        <br><br>    
        <input type="submit" name="log" id="log" value="Log In">       
        <br><br>    
         <a href="#">Forgot Password</a>    
    </form>   
</div>    
</body>    
</html>   