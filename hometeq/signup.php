<?php
$pagename="Sign Up"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>";//display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<table>";
echo "<form action='signup_process.php' method='post'>";

echo "<tr><td style='border: 0px'><label for='userFName'>First Name: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userFName' name='userFName'></td></tr>";

echo "<tr><td style='border: 0px'><label for='userSName'>Last Name: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userSName' name='userSName'></td></tr>";

echo "<tr><td style='border: 0px'><label for='userAddress'>Address: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userAddress' name='userAddress'></td></tr>";

echo "<tr><td style='border: 0px'><label for='userPostCode'>Post Code: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userPostCode' name='userPostCode'></td></tr>";

echo "<tr><td style='border: 0px'><label for='userTelNo'>Telephone Number: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userTelNo' name='userTelNo'></td></tr>";

echo "<tr><td style='border: 0px'><label for='userEmail'>Email: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userEmail' name='userEmail'></td></tr>";

echo "<tr><td style='border: 0px'><label for='userPassword'>Password: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userPassword' name='userPassword'></td></tr>";

echo "<tr><td style='border: 0px'><label for='userConfirmPassword'>Confirm Password: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userConfirmPassword' name='userConfirmPassword'></td></tr>";

echo "</table>";

echo "<br><input type=submit name='signUpBtn' value='Sign Up' id='signUpBtn'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

echo "<input type=reset name='clearFormBtn' value='Clear Form' id='clearFormBtn'>";

echo "</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>
