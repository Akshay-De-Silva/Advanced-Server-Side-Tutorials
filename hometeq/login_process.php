<?php
session_start();
include("db.php");

$pagename="Your Login Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>";//display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$email=$_POST['userEmail'];
$password=$_POST['userPassword'];

//echo "Email is: ".$email."<br>";
//echo "Password is: ".$password;

if (empty($_POST['userEmail']) || empty($_POST['userPassword'])) {

    echo "Both email and password need to be filled in. <br> <a href='login.php'>Click here to go back to Login</a>";

} else {

    //$SQL='select * from Users WHERE userEmail='.$email;
    $SQL="SELECT userId, userType, userFName, userSName, userPassword FROM Users WHERE userEmail='$email'";
    $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
    $arrayu=mysqli_fetch_array($exeSQL);
    $nbrecs=mysqli_num_rows($exeSQL);

    if ($nbrecs==0) {
        echo "Email not recognised, <a href='login.php'>Login</a> again";
    } else {
        if ($arrayu['userPassword']!=$password) {
            echo "Password not recognised, <a href='login.php'>Login</a> again";
        } else {
            echo "Login Successful<br>";
            $_SESSION['userId'] = $arrayu['userId'];
            $_SESSION['userType'] = $arrayu['userType'];
            $_SESSION['userFName'] = $arrayu['userFName'];
            $_SESSION['userSName'] = $arrayu['userSName'];
            echo "Hello ".$_SESSION['userFName']." ".$_SESSION['userSName']."<br>";
            //echo "User Type: ".$_SESSION['userType']."<br>";
        }
    }

}

if ($_SESSION['userType']=="A") {
    $_SESSION['user_type'] = "Administrator";
    echo "Welcome Administrator";
    echo "<p>Click to go to <a href='index.php'>Index Page</a></p>";
} else {
    $_SESSION['user_type'] = "Customer";
    echo "Welcome Customer";
    echo "<p>Click to go to <a href='basket.php'>Basket Page</a></p>";
    echo "<p>Click to go to <a href='index.php'>Index Page</a></p>";
}

include("footfile.html"); //include head layout
echo "</body>";
?>
