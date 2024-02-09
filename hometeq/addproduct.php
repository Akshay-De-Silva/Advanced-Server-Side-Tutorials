<?php
$pagename="Add Product"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>";//display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<table>";
echo "<form action='addproduct_process.php' method='post'>";

echo "<tr><td style='border: 0px'><label for='prodName'>Product Name: </label></td>";
echo "<td style='border: 0px'><input type='text' id='prodName' name='prodName'></td></tr>";

echo "<tr><td style='border: 0px'><label for='prodSmallPicName'>Small Pic Name: </label></td>";
echo "<td style='border: 0px'><input type='text' id='prodSmallPicName' name='prodSmallPicName'></td></tr>";

echo "<tr><td style='border: 0px'><label for='prodLargePicName'>Large Pic Name: </label></td>";
echo "<td style='border: 0px'><input type='text' id='prodLargePicName' name='prodLargePicName'></td></tr>";

echo "<tr><td style='border: 0px'><label for='prodShortDes'>Short Description: </label></td>";
echo "<td style='border: 0px'><input type='text' id='prodShortDes' name='prodShortDes'></td></tr>";

echo "<tr><td style='border: 0px'><label for='prodLongDes'>Long Description: </label></td>";
echo "<td style='border: 0px'><input type='text' id='prodLongDes' name='prodLongDes'></td></tr>";

echo "<tr><td style='border: 0px'><label for='prodPrice'>Price: </label></td>";
echo "<td style='border: 0px'><input type='number' id='prodPrice' name='prodPrice' min='0' step='.01'></td></tr>";

echo "<tr><td style='border: 0px'><label for='prodQuan'>Initial Stock Quantity: </label></td>";
echo "<td style='border: 0px'><input type='number' id='prodQuan' name='prodQuan' min='0'></td></tr>";

echo "</table>";

echo "<br><input type=submit name='addProdBtn' value='Add Product' id='addProdBtn'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

echo "<input type=reset name='clearFormBtn' value='Clear Form' id='clearFormBtn'>";

echo "</form>";

include("footfile.html"); //include head layout
echo "</body>";
?>
