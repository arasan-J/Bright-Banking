<?php include('connect.php') ?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="css/transfer.css" rel="stylesheet" type="text/css">
</head>
    <body>
        <a class="nav" href="index.php">HOME</a>
		<h1 id="head">Transfer Amount</h1>

    <form method="POST" action="transfering.php">
			<div class="head">
			<h2 id="from">Transferring From:</h2>
            <table  id="fromtable" class="table table-striped table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>UserName</th>
                <th>Amount</th>
            </tr>
			<?php
				$id = $_GET['rn'];
				$query = "SELECT * FROM REGISTRATION WHERE ID = '$id'";
                $data = mysqli_query($conn, $query);


				while($row = mysqli_fetch_array($data)) 
				{
				echo "
                <tr>
				<td>" .$row['id'] ."
				<td>" .$row['userName']. "
			    <td>" .$row['amount']."
			    </tr>"; 
				}
				echo "</table>";
			?>
			<div class="container">
			<h2 id="to">Transfer Amount To:</h2>
            <div class="center">
			<select class="form-control" required name="touser" id="list">
			<option id="select" value="">Select Users</option>
                <?php
				   // var $space = " ";
					$id = $_GET['rn'];
                    $query = "SELECT * FROM registration where ID != '$id'";
                    $result = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($result))
                    {?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['userName']; ?></option>
					<?php
                    }
				?>
            </select>
		</div>
	<div class="center2">

			<h2><b>Amount</b></h2>
		
			<input type="text" id="amt" name="amount" required="required">
			<br>
			<input name="fromtc" type="hidden" value="<?php echo $id;?>">
			<br>
			<button class='button2 btn-primary' name='transfer' onclick="myfunction()" >Transfer Amount</button>
			</form>	
</div>
</div>
<script src="./js/main.js"></script>
</body>
</html>
    
    