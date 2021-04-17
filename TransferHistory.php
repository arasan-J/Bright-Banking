<?php include('connect.php') ?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="css/transferHistory.css" rel="stylesheet" type="text/css">
</head>
<?php
$query = "SELECT * FROM transferrecords";
$data = mysqli_query($conn,$query);
?>
<body>
    <button type="button" class="btn"><a class="btn" href="index.php">Home</a></button>
        <form method="GET">
                <h1> Transaction History </h1>
                
         <table id="history" class="table table-striped table-bordered table-hover">
            <tr>
                <th>From</th> 
                <th>To</th> 
                <th>Amount Transferred</th>
                <th >Date <br>[YYYY-MM-DD]</th>
            </tr>
        <?php
        while($row = mysqli_fetch_array($data))
        {
            echo "
            <tbody>
            <tr>
				<td>" .$row['fromUser']. "</td>
			    <td>" .$row['toUser']."</td>
                <td>" .$row['amountTransferred']." </td>
                <td>" .$row['dateTime'] ."</td>
			    </tr>
                </tbody>"; 
        }
        echo "</table>";

    ?>

</body>
</html>