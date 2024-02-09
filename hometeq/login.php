<?php
session_start();

$pagename="Login"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>";//display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<table>";

echo "<form method='post' action='login_process.php'>";

echo "<tr><td style='border: 0px'><label for='userEmail'>Email: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userEmail' name='userEmail'></td></tr>";

echo "<tr><td style='border: 0px'><label for='userPassword'>Password: </label></td>";
echo "<td style='border: 0px'><input type='text' id='userPassword' name='userPassword'></td></tr>";

echo "</table>";

echo "<br><input type=reset name='clearFormBtn' value='Clear Form' id='clearFormBtn'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

echo "<input type=submit name='loginBtn' value='Log In' id='loginBtn'>";

echo "</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>
