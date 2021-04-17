<html>
<head>
<link href="css/userInfo.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
    <body>
    <div class="container">
    <div class="nav">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="TransferHistory.php">Transaction History</a></li>
        </ul>
    </div>
        <div class="usertable">
    <h1 style="text-align: center; color: white;"> All Customers Table</h1>
        <table id="cusTable" class="table table-bordered ">
            <tr>
                <th>UserName</th>
                <th>Amount</th>
                <th >Operations</th>
                <th>Make Transaction</th>
            </tr>

<?php include('connect.php');
    $sql =  "SELECT id, userName, amount from registration";
    $result = $conn-> query($sql);

    if($row = $result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            echo "
            <tr>
            <td>".$row["userName"]."</td>
            <td>".$row["amount"]."</td>
            <td ><a  href='delete.php?rn=$row[id]'>Delete</td>
            <td><a href ='transfer.php?rn=$row[id]'>Transfer</td>
            </tr>
            ";
        }
    } else {
        echo "0 result";
    }
    $conn -> close();
?>
</table>
</div>
</div>
</body>
</html>