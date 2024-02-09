<?php
session_start();
include("db.php");
mysqli_report(MYSQLI_REPORT_OFF);

$pagename="Add Product Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>";//display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$prodName=$_POST['prodName'];
$prodSmallPicName=$_POST['prodSmallPicName'];
$prodLargePicName=$_POST['prodLargePicName'];
$prodShortDes=$_POST['prodShortDes'];
$prodLongDes=$_POST['prodLongDes'];
$prodPrice=$_POST['prodPrice'];
$prodQuan=$_POST['prodQuan'];

if(!(empty($prodName) || empty($prodSmallPicName) || empty($prodLargePicName) || empty($prodShortDes) || empty($prodLongDes) || empty($prodPrice) || empty($prodQuan))) {

    $SQL = "INSERT INTO product (prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) VALUES ('$prodName', '$prodSmallPicName', '$prodLargePicName', '$prodShortDes', '$prodLongDes', '$prodPrice', '$prodQuan')";
    $exeSQL=mysqli_query($conn, $SQL);

    if($exeSQL){
        echo "<p>Product Added</p>";
        echo "<a href='index.php'><p>Click here to go to the Hometeq Page</p></a>";
    } else {
        echo "<p>Error";
        $errorNum=mysqli_errno($conn);
        if ($errorNum==1062) {
            echo "<p>Product Has already been added ";
            echo "<a href='addproduct.php.php'><p>Click here to go back to the Add Product page</p></a>";
        } else if ($errorNum==1064){
            echo "<p>Invalid Characters Used ";
            echo "<a href='addproduct.php.php'><p>Click here to go back to the Add Product page</p></a>";
        } else if ($errorNum==1054){
            echo "<p>Invalid Characters Used in Numerical Field ";
            echo "<a href='addproduct.php.php'><p>Click here to go back to the Add Product page</p></a>";
        }
    }

} else {
    echo "<p>All mandatory fields needs to be filled";
    echo "<a href='addproduct.php'><p>Click here to go back to the Add Product page</p></a>";
}

include("footfile.html"); //include head layout
echo "</body>";
?>
