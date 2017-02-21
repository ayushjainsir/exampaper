

<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap.css" rel="stylesheet" media="screen">
    <link href="main.css" rel="stylesheet" media="screen">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
    <?php


// establishing the MySQLi connection

 

$con = mysqli_connect("localhost", "root", "root", "exampaper");

/*if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL;
*/

// checking the user
//echo "lets see again";
if(isset($_POST['submit'])){

$username = $_POST['username'];

$password = $_POST['password'];

$sel_user = "select * from user where username='$username' AND password='$password'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){
    session_start();

$_SESSION["username"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];
echo "Successfully log in";
echo "<script>window.open('welcome.php','_self')</script>";

}

else {

echo"<script>alert('username or password incorrect')</script>";

}

}

?>
       
<div class="container">

      <form class="form-signin" name="form1" method="post" action="index.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="username" id="username" type="text" class="form-control" placeholder="Username" autofocus>
        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
        <!-- The checkbox remember me is not implemented yet...
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        -->
        <button name="submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        <div id="message"</div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="js/jquery-2.2.4.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script type="text/javascript" src="js/bootstrap.js"></script> -->
    <!-- The AJAX login script -->
    <!-- <script src="js/login.js"></script> -->

    </body>
</html>
