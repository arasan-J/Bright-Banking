<html>
<body>
<?php include('connect.php');
$id = $_GET['rn'];
$query = "DELETE FROM REGISTRATION WHERE ID = '$id'";
$data = mysqli_query($conn, $query);

if($data){
    echo '<script>';
    echo 'alert("Record deleted successfully");';
    echo 'window.location.href= "userInfo.php";';
    echo '</script>';
    $data -> close();
}else {
    echo "Deletion failed";
}
?>
</body>
</html>