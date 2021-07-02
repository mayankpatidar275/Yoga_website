<?php
    if(isset($_POST['set'])){
        $username = $_POST['fname'];
        
        if (strlen($username)<=14) {
            echo "username should be more than 8 characters";
        }
    }
?>
<?php
    if(isset($_POST['set'])){
       
        $password = $_POST['password'];
        if (strlen($password)>=8) {
            echo "<br>";
            echo "password should be more than 8 characters";
        }
    }
?>
<?php
        $user_email = $_POST['email'];
    if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
        echo "<br>$user_email is valid not email";
    }
?>
<?php
    $cookie_name = 'user_email';
    if(isset($_REQUEST['set'])){
        $cookie_value = $_REQUEST['email'];
        $cookie_expire = time()+60*60*24*2;
        setCookie($cookie_name, $cookie_value, $cookie_expire);
    }
?>
<?php
    $cookie_name2 = 'user_pass';
    if(isset($_REQUEST['set'])){
        $cookie_value2 = $_REQUEST['password'];
        $cookie_expire = time()+60*60*24*2;
        setCookie($cookie_name2, $cookie_value2, $cookie_expire);
    }
?>


<?xml version="1.0" encoding="iso-8859-1"?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!-- <meta charset="UTF-8" /> -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Subscription Form</title>
    <link rel="stylesheet" href="bt20ece064_form.css" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&amp;display=swap" rel="stylesheet" />
</head>
<script src="bt20ece064.js"></script>

<body onload="myFunction()" onunload="confirm()">

    <div class="container">

        <div class="main">

            <div class="heading">Registration Form</div>

            <div class="form" id="add">

                <div class="content">
                    <form action="" name="myform" method="POST">

                        <ul id="list">

                            <li class="form-part">

                                <div class="part1"><label for="name">Name :</label></div>

                                <div class="form-value">


                                    <div class="label_inp"><input type="text" id="first-name" name="fname" onfocus="focus_func(this)" value="" />
                                        <label for="first-name">First Name</label>
                                    </div>


                                    <div class="label_inp"><input type="text" id="last-name" name="lname" onfocus="focus_func(this)" value="" />
                                        <label for="last-name">Last Name</label>
                                    </div>

                                </div>
                            </li>

                            <li class="form-part">

                                <div class="part1"><label for="E-mail">E-mail :</label></div>

                                <div class="form-value">


                                    <div class="label_inp"><input type="email" id="email" name="email" onfocus="focus_func(this)"/>
                                        <label for="E-mail">example@example.com</label>
                                    </div>

                                </div>
                            </li>
                            <li class="form-part">

                                <div class="part1"><label for="password">Password :</label></div>

                                <div class="form-value">


                                    <div class="label_inp"><input type="password" id="password" name="password" onfocus="focus_func(this)"/>
                                        <label for="password"></label>
                                    </div>

                                </div>
                            </li>

                            <li class="form-part">

                                <div class="part1"><label for="phone">Phone no. :</label></div>

                                <div class="form-value">

                                    <div class="label_inp"><input type="tel" id="number" name="number" onfocus="focus_func(this)" value="" />
                                        <label for="phone">Number</label>
                                    </div>

                                </div>
                            </li>

                            <li class="form-part">

                                <div class="part1"><label for="gender">Gender</label></div>

                                <div class="form-value form-value2">

                                    <div class="label_inp2"><input type="radio" id="male" name="gender" value="male" />
                                        <label for="male">Male</label><br />
                                    </div>

                                    <div class="label_inp2"><input type="radio" id="female" name="gender"
                                            value="female" />
                                        <label for="female">Female</label><br />
                                    </div>

                                    <div class="label_inp2"><input type="radio" id="other" name="gender"
                                            value="other" />
                                        <label for="other">Other</label>
                                    </div>
                                </div>
                            </li>

                            <li class="form-part">

                                <div class="part1"><label for="birthday">Birthday :</label></div>

                                <div class="form-value">

                                    <div class="label_inp">
                                        <input type="date" id="birthday" name="birthday" onfocus="focus_func(this)" />
                                        <label for="date">date</label>
                                    </div>
                                </div>
                            </li>

                            <li class="form-part">

                                <div class="part1"><label for="Schedule">Schedule : </label></div>

                                <div class="form-value form-value2">

                                    <div class="label_inp2"><input type="radio" id="morning" name="Schedule" value="" />
                                        <label for="morning">6 AM - 7 AM</label><br />
                                    </div>

                                    <div class="label_inp2"><input type="radio" id="afternoon" name="Schedule"
                                            value="" />
                                        <label for="afternoon">1 PM - 2 PM</label><br />
                                    </div>

                                    <div class="label_inp2"><input type="radio" id="evening" name="Schedule" value="" />
                                        <label for="evening">6 PM - 7 PM</label>
                                    </div>
                                </div>
                            </li>

                            <li class="form-part">

                                <div class="part1"><label for="class-level">Class Level :</label></div>

                                <div class="form-value form-value2">

                                    <div class="label_inp2"><input type="radio" id="beginner" name="level" value="" />
                                        <label for="beginner">Beginner</label><br />
                                    </div>

                                    <div class="label_inp2"><input type="radio" id="intermidiate" name="level"
                                            value="" />
                                        <label for="intermidiate">Intermidiate</label><br />
                                    </div>

                                    <div class="label_inp2"><input type="radio" id="advance" name="level" value="" />
                                        <label for="advance">Advance</label>
                                    </div>
                                </div>
                            </li>

                            <li class="form-part">

                                <div class="part1"><label for="session-packages">Session Packages :</label></div>

                                <div class="form-value form-value2">

                                    <div class="label_inp2">
                                        <input type="radio" id="beginner-package" name="package" value="" />
                                        <label for="beginner-package">3 month - 600 Rs</label><br />
                                    </div>

                                    <div class="label_inp2">
                                        <input type="radio" id="intermidiate-package" name="package" value="" />
                                        <label for="intermidiate-package">2 month - 450 Rs</label><br />
                                    </div>

                                    <div class="label_inp2">
                                        <input type="radio" id="advance-package" name="package" value="" />
                                        <label for="advance-package">1 month - 300 Rs</label>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="register" >
                            <!-- <input type="submit" value="submit" name="set" onmouseover="bigImg(this)" onmouseout="normalImg(this)" onclick="myFunction2()"> -->
                            <input type="submit" value="submit" name="set">
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>
                    <?php
                    if(isset($_COOKIE[$cookie_name])){
                        echo "Cookie name is" . $cookie_name . " and value is" . $_COOKIE[$cookie_name] . "<br>";
                    }else {
                        echo "Cookie not set";
                    }
                    ?>
</body>

</html>