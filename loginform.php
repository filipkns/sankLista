<?php
require 'core.php';
require 'connectMySQL.php';

if (filter_input(INPUT_POST, "logout")) {
    session_start();
    session_destroy(); }

session_start();

if (isset($_POST['password'])) echo 'pass:' . $_POST['password'] . '   user: ' . $_POST['username'];
if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username']!=='' && $_POST['password']!=='') {


    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = 'SELECT * FROM users WHERE username ="'.$username.'" AND password = "'.$password.'"';
    echo $query;
     if ($query_run = mysqli_query($conn, $query)) {

            $query_num_rows = mysqli_num_rows($query_run);


            if ($query_num_rows == 0) {

                echo "invalid username/password";
            } elseif ($query_num_rows == 1) {

                switch (mysqli_fetch_array($query_run)['3'] ){
                    case 'admin' :
                        $_SESSION['userType'] = "admin";
                    break ;

                    default : $_SESSION['userType'] = "/";
                };

                $_SESSION['auth'] = '1';
                header("Location: /index.php");
                exit();
               //echo 'sad';
            }

        }

} else {
    echo 'Please input username and password';
}

$_POST['username']=null;
$_POST['password']=null;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>


</head>
<body>


<form action=<?php echo $current_file ?> method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="Log in">
</form>


</body>
</html>