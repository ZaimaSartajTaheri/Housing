<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
session_start();
error_reporting(0);
include('../includes/config.php');


if(isset($_POST['submit'])){
	if(isset($_POST['term'])===true){
    
        if(isset($_POST['name']) && !empty($_POST['name'])){
          $name=$_POST['name'];
          }else{
            $nameError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Please fill the name field</strong>
    
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    
          }
    
    
         
    
      if(isset($_POST['contact_no']) && !empty($_POST['contact_no'])){
      if(preg_match('/\d{11}/',$_POST['contact_no'])){
      	$contact_no=$_POST['contact_no'];

      }else{
      	$contactnoError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>contact number must contain 11 digits</strong>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

      }

      }else{
      	$contactnoError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Please fill the contact no field</strong>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

      }


     






      if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])){
      	if(strlen($_POST['password'])>=6){
      		if($_POST['password']==$_POST['c_password']){
      			$password=$_POST['password'];

      		}

      		else{
$cpasswordError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>The password does not match with confirm password</strong>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
      		}

      	}


      	else{
      		$passwordError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>The password should consist of 6 characters</strong>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

      	}
      }
      else{
$passwordError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Please fill the password field</strong>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
      }




      if(isset($_POST['email']) && !empty($_POST['email'])){
      if(preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',$_POST['email'])){

        $check_email=$_POST['email'];
        
        $sql="SELECT email FROM house_owner WHERE email='$check_email'";

        $result=mysqli_query($con,$sql);

        if(mysqli_num_rows($result)>0){
           $emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry this email already exists</strong>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

      
        }
        else{
$email=$_POST['email'];
        }

      }else{
        $emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please enter valid email address</strong>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

      }

      }else{
        $emailError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please fill the email field</strong>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

      }
      // echo $email;
      // echo $shopname;
      // echo $contact_no;
      // echo $password;
      if(isset($email) && isset($contact_no)  && isset($password)){

     

        $password=md5($password);
           $sql="INSERT INTO house_owner(email,name,contactNo,password) values('$email','$name','$contact_no','$password')";


           if(mysqli_query($con,$sql)){
         
            $submitSuccess='<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>You have registered successfully</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}   else{
   $submitError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data not inserted..Try again</strong>

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}



      }


	}else{
		$termError='<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Please agree with our terms and conditions</strong>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	}
}


?>

<style>
.signupcontainer {
    background-color: #c0f090;
    width: 50% !important;
    margin-top: 1%;
    margin-bottom: 3%;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 3px #c0f090;
}

.signupcontainer form {
    padding: 3%;
}

.signupcontainer label,
h3 {
    color: black;
}

.signupcontainer input {
    background-color: white;
    color: black;
}


.lnk {
    background-color: #41720f !important;
    color: white !important;
    font-size: 14px !important;
    font-weight: bold !important;
    box-shadow: none !important;
    border-radius: 7%;
    border: none;
    padding: 1.2%;
}

.signupcontainer input:focus {
    outline: none !important;
    border: 1px solid #181818;
    box-shadow: 0 0 2px #c0f090;
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

.termandcondition b {
    color: black;
}

.valid {
    color: black !important;
}

.invalid {
    color: #41720f !important;
}
</style>


<?php include('include/header.php');?>


<div class="container signupcontainer">
    <h3 class="text-center">Upload to Sell!!!!</h3>

    <?php
        
        if(isset($termError)) echo $termError;
        if(isset($submitError)) echo $submitError;
        if(isset($submitSuccess)) echo $submitSuccess;
        
                    ?>
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your
                email with anyone else.</small>
        </div>

        <?php if(isset($emailError)) echo $emailError; ?>
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
                placeholder="Enter Name">
           
        </div>

        <?php if(isset($nameError)) echo $nameError; ?>

       
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input name="contact_no" class="form-control" id="exampleInputPhone" aria-describedby="phoneHelp"
                placeholder="Enter phone Number"> <small id="phoneHelp" class="form-text text-muted">We'll never share
                your phone number with anyone
                else.</small>
        </div>
        <?php if(isset($contactnoError)) echo $contactnoError; ?>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password">
        </div>
        <?php if(isset($passwordError)) echo $passwordError; ?>


        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" name="c_password" class="form-control" id="exampleInputCPassword1"
                placeholder="Confirm Password">
        </div>
        <?php if(isset($cpasswordError)) echo $cpasswordError; ?>
        <div class="termandcondition">
            <input type="checkbox" name="term" value="true">
            <span><b>I am agree to term and condition of Shop Now</b></span>
        </div>
        <br>

        <button type="submit" name="submit" id="submit" class="lnk">Submit</button>

    </form>
    <p class=" bottom-line text-center">Already registered!! <a href="login.php">Login</a> now</p>
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
