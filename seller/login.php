<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if(isset($_POST['submit'])){

if(!empty($_POST['email']) && !empty($_POST['password']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"SELECT * FROM house_owner WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="insert-product.php";
$_SESSION['hlogin']=$_POST['email'];
$_SESSION['hoid']=$num['id'];
$_SESSION['hoName']=$num['name'];
$_SESSION['contact']=$num['contactNo'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"INSERT INTO holog(hname,hEmail,hip,status) values('".$_SESSION['hoName']."','".$_SESSION['hlogin']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into holog(hEmail,hip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']='<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Invalid Email or password</strong>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
exit();
}
}
else{
    $loginError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Please fill all the field</strong>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

}

}


?>
<style>
.logincontainer {
    background-color: #c0f090;
    width: 50% !important;
    margin-top: 1%;
    color: white;
    margin-bottom: 3%;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 3px #c0f090;
}

.logincontainer form {
    padding: 3%;
}

.logincontainer label,
h3 {
    color: black;
}

.logincontainer input {
    background-color: white;
    color: black;
}

.lnk {
    background-color: #41720f!important;
    color: white !important;
    font-size: 14px !important;
    font-weight: bold !important;
    box-shadow: none !important;
    border-radius: 7%;
    border: none;
    padding: 1.2%;
}



.logincontainer input:focus {
    outline: none !important;
    border: 1px solid #181818;
    box-shadow: 0 0 2px #FFD300;
}

.bottom-line {
    color: black;
}

.bottom-line a {
    color: #41720f;
    text-decoration: none;
}

.bottom-line a:hover {
    color: black;
}

.forgot-password {
    color: #41720f;

}

.forgot-password:hover {
    color: #41720f;
    text-decoration: none;
}
</style>



<?php include('include/header.php');?>


<div class="container logincontainer">
    <h3 class="text-center">Welcome!!!</h3>

    <?php if(isset($loginError)) echo $loginError; ?>
    <?php echo $_SESSION['errmsg'];?>
    <?php echo $_SESSION['errmsg']="";?>

    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
        </div>
        <div class="form-group">
            <a href="../forgot-password.php" class="forgot-password pull-right">Forgot your
                Password?</a>
        </div>
      
        <button type="submit" name="submit" id="submit" class="lnk">Login</button>
    </form>
    <p class="bottom-line text-center">New in Our Site!! <a href="signup.php">Register</a> now</p>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

