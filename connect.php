<html>
<head>
<title></title>
</head>

<body>
<?php

$conn = new mysqli('localhost', 'root','', 'bank');
if($conn-> connect_error){
    die('connection failed : '.$conn->connect_error);
} else {
    $conn = new mysqli('localhost', 'root','', 'bank');
}
?>

</body>
</html>