<?php
include_once "connect.php";
session_start();

    //DB configuration Constants
   // define('_HOST_NAME_', 'localhost');
   // define('_USER_NAME_', 'XXXXXX');
  //  define('_DB_PASSWORD', 'XXXXXX');
  //  define('_DATABASE_NAME_', 'XXXXXXX');

    //PDO Database Connection


if(isset($_POST['submit'])){
    $errMsg = '';
        //username and password sent from Form
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);



    if($username == '')
        $errMsg .= 'You must enter your Username<br>';

    if($password == '')
        $errMsg .= 'You must enter your Password<br>';

        //




    if($errMsg == ''){
        $sql = "SELECT id,username,password FROM Members WHERE username = '" . $username"'";
        $result = mysqli_query($conn, $sql);
        echo mysqli_error ($conn);
        if(mysqli_num_rows(count($results)) > 0 && password_verify($password, $results['password']){
            $_SESSION["loggedin"] = "success";
            $_SESSION['username'] = $results['username'];
            header('location:../gamestore/index.php');
            exit;
        }else{
            $errMsg .= 'Username and Password are not found<br>';
        }
    }
    

    ?>
    <html>
    <head><title>Login Page PHP Script</title></head>
    <body>
        <div align="center">
            <div style="width:300px; border: solid 1px #006D9C; " align="left">
                <?php
                if(isset($errMsg)){
                    echo '<div style="color:#FF0000;text-align:center;font-size:12px;">'.$errMsg.'</div>';
                }
                ?>
                <div style="background-color:#006D9C; color:#FFFFFF; padding:3px;"><b>Login</b></div>
                <div style="margin:30px">
                    <form action="" method="post">
                        <label>Username  :</label><input type="text" name="username" class="box"/><br /><br />
                        <label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
                        <input type="submit" name='submit' value="Submit" class='submit'/><br />

                    </form>
                </div>
            </div>
            <a href="../Login/registration.php">Click Here To Register!</a>
        </div>

    </body>
    </html>
