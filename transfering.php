<?php include ('connect.php'); ?>
<?php
if(isset($_POST['transfer']))
{
	  
	session_start();
    $from = trim($_POST['fromtc']);
    $to = trim($_POST['touser']);
    $amount = trim($_POST['amount']);  
    $error = false;
	
	$from_query = "SELECT * FROM registration WHERE id='$from'";
	$from_result = mysqli_query($conn,$from_query);
	$row_from = mysqli_fetch_assoc($from_result);
	$fromUser = $row_from['userName'];
	
	$fromAmount = $row_from['amount'];
	$to_query = "SELECT * FROM registration WHERE id='$to'";
	$to_result = mysqli_query($conn,$to_query);
    $row_to = mysqli_fetch_assoc($to_result);
    $toUser = $row_to['userName'];
	
    $toAmount = $row_to['amount'];
	
	 if((int)$amount>(int)$fromAmount)
    {
        $errors = "Insufficient amount";
        $error = true; 
    }
	
	if(!$error)
    {
        $current_date = date("Y-m-d");
        $fromFinalAmount = "UPDATE registration SET ";
        $fromFinalAmount .= "amount = amount - $amount WHERE id=$from";
        $query = mysqli_query($conn,$fromFinalAmount);
        
		if(!$query)
        {
            die("QUERY FAILED".mysqli_error($conn));
			echo("Error description: " . $mysqli -> error);
        }
		
        $toFinalAmount = "UPDATE registration SET ";
        $toFinalAmount .= "amount = amount + $amount WHERE id=$to";
        $query = mysqli_query($conn,$toFinalAmount);
	
        $query1 = "INSERT INTO transfeRrecords(fromUser,toUser,amountTransferred,dateTime) VALUES('$fromUser','$toUser','$amount','$current_date')";
        $res2 = mysqli_query($conn,$query1);
		
		
		if($res2){
			
			$user1 = "SELECT * FROM registration WHERE id='$from' OR id='$to'";
			$res=mysqli_query($conn,$user1);
			$row_count=mysqli_num_rows($res);
			
		}
		else{
				die("QUERY FAILED".mysqli_error($conn));
				echo("Error description: " . $mysqli -> error);
		}
    }
	else{
		function_alert("Insufficient Credit Balance!!Please Try Again");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<script>
alert("Transaction Successfull!!")
window.location.href="userInfo.php";
</script>
</body>
</html>
