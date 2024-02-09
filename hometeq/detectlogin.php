<?php
if (isset($_SESSION['userId'])) {

    echo "<div style='text-align:right'>".$_SESSION['userFName']." ".$_SESSION['userSName']." | ".$_SESSION['user_type']."</div>";
}
?>
