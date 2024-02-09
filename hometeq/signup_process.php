<?php
session_start();
include("db.php");
mysqli_report(MYSQLI_REPORT_OFF);

$pagename="Sign Up Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>";//display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$userFName=$_POST['userFName'];
$userSName=$_POST['userSName'];
$userAddress=$_POST['userAddress'];
$userPostCode=$_POST['userPostCode'];
$userTelNo=$_POST['userTelNo'];
$userEmail=$_POST['userEmail'];
$userPassword=$_POST['userPassword'];
$userConfirmPassword=$_POST['userConfirmPassword'];

if(!(empty($userFName) || empty($userSName) || empty($userAddress) || empty($userPostCode) || empty($userTelNo) || empty($userEmail) || empty($userPassword) || empty($userConfirmPassword))) {

    if($userPassword != $userConfirmPassword) {

        echo "<p>Passwords do not match";
        echo "<a href='signup.php'><p>Click here to go back to the Sign Up page</p></a>";

    } else {

        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

        if (preg_match($regex, $userEmail)){

            $SQL = "INSERT INTO Users (userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword) VALUES ('$userFName', '$userSName', '$userAddress', '$userPostCode', '$userTelNo', '$userEmail', '$userPassword')";
            $exeSQL=mysqli_query($conn, $SQL);

            if($exeSQL){
                echo "<p>Signup Complete</p>";
                echo "<a href='login.php'><p>Click here to Log In</p></a>";
            } else {
                echo "<p>Error";
                $errorNum=mysqli_errno($conn);
                if ($errorNum==1062) {
                    echo "<p>Email Has already been used";
                    echo "<a href='signup.php'><p>Click here to go back to the Sign Up page</p></a>";
                } else if ($errorNum==1064){
                    echo "<p>Invalid Characters Used ";
                    echo "<a href='signup.php'><p>Click here to go back to the Sign Up page</p></a>";
                }
            }
        } else {
            echo "<p>Email in Incorrect Format";
            echo "<a href='signup.php'><p>Click here to go back to the Sign Up page</p></a>";
        }
    }
} else {
    echo "<p>All mandatory fields needs to be filled";
    echo "<a href='signup.php'><p>Click here to go back to the Sign Up page</p></a>";
}

include("footfile.html"); //include head layout
echo "</body>";
?>
