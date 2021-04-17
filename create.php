<?php
    include('connect.php');
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $amount = $_POST['amount'];
    
        $stmt = $conn-> prepare("insert into registration(userName, password, amount)values(?,?,?)");
        $stmt->bind_param("ssi", $userName, $password, $amount);
        $stmt->execute();
        echo '<script type="text/javascript">';
        echo 'alert("Registration Successful!!");';
        echo 'window.location.href= "index.php";';
        echo '</script>';
        $stmt->close();

    
    $query = "SELECT * FROM registration";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);

?>