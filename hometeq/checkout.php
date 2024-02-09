<?php
session_start();
include ("db.php");
mysqli_report(MYSQLI_REPORT_OFF);

$pagename="Checkout"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>";//display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

include ("detectlogin.php");

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

date_default_timezone_set("Asia/Colombo");
$currentdatetime= date('Y-m-d H:i:s',time());

$userId=$_SESSION['userId'];

$SQL="INSERT INTO Orders (orderDateTime, orderStatus, userId) VALUES ('$currentdatetime', 'Placed', '$userId')";
$exeSQL=mysqli_query($conn, $SQL);

if($exeSQL) {
    echo "<p>Order Success</p><br>";

    $SQL="SELECT MAX(orderNo) FROM Orders WHERE userId='$userId'";
    $exeSQL=mysqli_query($conn, $SQL);
    $arrayo=mysqli_fetch_array($exeSQL);
    $orderNum = $arrayo[0];
    echo "Order Number: ".$orderNum."<br><br>";

    $total=0;
    echo "<table>";
    echo "<tr>";
    echo "<th>Product Name</th>";
    echo "<th>Price</th>";
    echo "<th>Quantity</th>";
    echo "<th>Subtotal</th>";
    echo "</tr>";

    if(ISSET($_SESSION['basket'])) {
        foreach($_SESSION['basket'] as $index => $value) {
            $SQL="select prodName, prodPrice from product WHERE prodID=".$index;
            $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));
            $subtotal=0;
            while ($arrayb=mysqli_fetch_array($exeSQL)) {
                $subtotal= $value*$arrayb['prodPrice'];
                echo "<tr>";
                echo "<td><p>".$arrayb['prodName'];
                echo "<td><p>&pound".$arrayb['prodPrice'];
                echo "<td><p>".$value;
                echo "<td><p>&pound".$subtotal;
//                echo "<td>";
//                echo "<form action='basket.php' method='post'>";
//                echo "<input type='submit' name='removeitembtn' value='Remove Item' id='removeitembtn'>";
//                echo "<input type='hidden' name='d_prodid' value=".$index.">";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
                $total+=$subtotal;

                $SQL_Insert = "INSERT INTO orders_line (quantityOrdered, subTotal, orderNo, prodId) VALUES ('$value', '$subtotal', '$orderNum', '$index')";
                $exeSQLInsert=mysqli_query($conn, $SQL_Insert) or die (mysqli_error($conn));
            }
        }
        $empty=false;
        echo "Total = &pound".$total."<br><br>";

        $SQL_Update = "UPDATE Orders SET orderTotal='$total' WHERE orderNo='$orderNum'";
        $exeSQL=mysqli_query($conn, $SQL_Update) or die (mysqli_error($conn));

    } else {
        echo "<br><br>Order Error<br><br>";
    }

} else {
    echo "<p>Order Error</p>";
}
echo "</table>";

unset($_SESSION['basket']);

include("footfile.html"); //include head layout
echo "</body>";
?>
