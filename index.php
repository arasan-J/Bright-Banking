<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bank Management System</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src='./js/main.js'></script>
</head>
<body>
    <div class="homepage">
        <p style="text-align= center" class="title">Bright Banking</p>
        <form action="create.php" name="form" id="createform" method="POST" onsubmit="return validateform()">
        <div class="form-group">
            <label for="userName">Username</label><br>
            <input type="text" class="form-control" id="userName" placeholder="Enter your Username" name="userName"></input><br>
        </div>
        <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" class="form-control" id="password" placeholder="Enter your Password" name="password"></input><br>
        </div>
        <div class="form-group">
            <label for="deposit">Deposit amount</label><br>
            <input type="number" class="form-control" id="amount" placeholder="Enter the amount" name="amount"></input><br>
        </div>
        <input type="submit" class="btn" style="background-color:#f1f1f1">
        <div class="loader"></div>
    </form>
    <div class="viewCus">
        <button id="vb"  style="background-color:#f1f1f1" class="btn btn-outline-dark"><a href="userInfo.php">View customer info</button>
    </div>
    <div class="history">
        <button id="hb" type="button" class="btn btn-outline-dark"><a href="TransferHistory.php" >Transaction History</button>
    </div>
    </div>
</body>
</html>