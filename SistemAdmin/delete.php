<?php
include "component/connection.php";
$ndp = $_GET['ndp'];
$sql = "DELETE FROM masuk WHERE ndp='$ndp'";
$result = mysqli_query($mysqli, $sql);
     echo "<script>window.location='dashboard_admin.php'</script>";

?>