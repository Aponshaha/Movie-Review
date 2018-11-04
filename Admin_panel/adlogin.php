<?php
session_start();
if(isset($_SESSION['userid'])){
    header('location: index.php');
}

if(!empty( $_SESSION['message'])){

    echo $_SESSION['message'];
    unset ($_SESSION['message']);
}
if (!empty($_POST)){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = new PDO('mysql:host=localhost;dbname=movie', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM registerrs WHERE email = ? AND password = ? AND user_type='admin'";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email, $password]);
    $data = $stmt->fetch();

    if(!empty($data))
    {
        $_SESSION['adminid'] = $data;
        header('location: index.php');
    }
    else
    {
        $_SESSION['message'] = "<div align='center' style='color: #f8f8f8'>Please Enter Your Valid Username Or Password</div>";
        header('location: adlogin.php');
    }

}
?>

<!DOCTYPE html>
<html >
<head>

    <title>Admin Log in</title>

    <link rel="stylesheet" type="text/css" href="../assests/bootstrap/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>


<div id="login" style="margin-top: 80px;">

    <h1>Admin Login</h1>

    <form action="" method="post" >
        <input type="email" class="input-data" placeholder="Email" name="email" required/>

        <input type="password" class="input-data" placeholder="Password" name="password" required/>

        <input type="submit" value="Log in" name="register" />
        <br><br>
        <p>Don't Have an account?</p><a href="adcreate.php">Register Now</a>
    </form>




</div>




<script src='../assests/bootstrap/js/bootstrap.min.js' ></script>

<script src="js/index.js"></script>




</body>
</html>
