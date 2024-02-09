<?php
session_start();
include("db.php");

$pagename="Smart Basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>";//display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

include('detectlogin.php');

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

if(ISSET($_POST['d_prodid'])) {
    $delprodid = $_POST['d_prodid'];
    unset($_SESSION['basket'][$delprodid]);
    echo "<p>1 item has been removed from the basket<br><br>";
}

if(ISSET($_POST['h_prodid'])) {
    $newprodid=$_POST['h_prodid'];
    $reququantity=$_POST['p_quantity'];

    //echo "<p>Selected product ID: ".$newprodid;
    //echo "<p>Selected product quantity: ".$reququantity;

    //create a new cell in the basket session array. Index this cell with the new product id.
    //Inside the cell store the required product quantity
    $_SESSION['basket'][$newprodid]=$reququantity;
    echo "<p>1 item added<br><br>";
}

$total=0;
echo "<table>";
echo "<tr>";
echo "<th>Product Name</th>";
echo "<th>Price</th>";
echo "<th>Quantity</th>";
echo "<th>Subtotal</th>";
echo "<th>Remove Product</th>";
echo "</tr>";

$empty=true;

if(ISSET($_SESSION['basket'])) {
    foreach($_SESSION['basket'] as $index => $value) {
        $SQL="select prodName, prodPrice from product WHERE prodID=".$index;
        $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
        $subtotal=0;
        while ($arrayp=mysqli_fetch_array($exeSQL)) {
            $subtotal= $value*$arrayp['prodPrice'];
            echo "<tr>";
            echo "<td><p>".$arrayp['prodName'];
            echo "<td><p>&pound".$arrayp['prodPrice'];
            echo "<td><p>".$value;
            echo "<td><p>&pound".$subtotal;
            echo "<td>";
            echo "<form action='basket.php' method='post'>";
            echo "<input type='submit' name='removeitembtn' value='Remove Item' id='removeitembtn'>";
            echo "<input type='hidden' name='d_prodid' value=".$index.">";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
            $total+=$subtotal;
        }
    }
    $empty=false;

} else {
    echo "<br><br>Basket is Empty<br><br>";
}
echo "</table>";


echo "Total = &pound".$total;

echo "<a href='clearbasket.php'>";
echo "<br><br>Clear Basket";
echo "</a>";

if (!$empty) {
    if (isset($_SESSION['userId'])) {
        echo "<br><br><p>Click here to <a href='checkout.php'>Checkout</a></p>";
    } else {
        echo "<br><br><p>New Hometeq Customers: <a href='signup.php'>Sign Up</a></p>";
        echo "<br><p>Returning Hometeq Customers: <a href='login.php'>Login</a></p>";
    }
}

include("footfile.html"); //include head layout
echo "</body>";
?>
