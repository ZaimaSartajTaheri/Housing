<?php
session_start();
include('../includes/config.php');

if(isset($_POST['submit']))
{
    $area=$_POST['area'];
	$hname=$_POST['hname'];
	$haddress=$_POST['haddress'];
	$sname=$_POST['sname'];
	$saddress=$_POST['saddress'];
	$mname=$_POST['mname'];
	$maddress=$_POST['maddress'];
    $pname=$_POST['pname'];
    $paddress=$_POST['paddress'];

    $sqlh=mysqli_query($con,"insert into hospitals(name,area,address) values('$hname','$area','$haddress')");

    $sqls=mysqli_query($con,"insert into schools(name,area,address) values('$sname','$area','$saddress')");

    $sqlm=mysqli_query($con,"insert into markets(name,area,address) values('$mname','$area','$maddress')");

    $sqlp=mysqli_query($con,"insert into parks(name,area,address) values('$pname','$area','$paddress')");

$_SESSION['msg']="Information Inserted Successfully !!";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <style>
    .lnk {
        background-color: #c0f090 !important;
        color: black !important;
        font-size: 14px !important;
        font-weight: bold !important;
        box-shadow: none !important;
        border-radius: 7%;
        border: none;
        padding: 1.2%;
    }
   
    .control-group .controls input:focus {
        outline: none !important;
        border: 1px solid #181818;
        box-shadow: 0 0 2px #999999;
        color: #000000;

    }

    .lnk {
        background-color: #c0f090!important;
        color: black !important;
        font-size: 14px !important;
        font-weight: bold !important;
        box-shadow: none !important;

    }
    </style>
</head>

<body>
    <header>
        <?php include('include/header.php');?>

    </header>

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php include('include/sidebar.php');?>
                <div class="span8">
                    <div class="content">

                        <div class="module">
                          

                            <div class="module-body">


                                <?php if(isset($_POST['submit']))
{?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                </div>
                                <?php } ?>
                                <br />
                                <form class="form-horizontal row-fluid" name="chngpwd" method="post"
                                    onSubmit="return valid();">
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Area</label>
                                        <div class="controls">
                                            <input type="text" class="span8 tip" id="area" name="area">
                                        </div>

                                    </div>


      <!-- Hospital -->
                                <h4>Hospital Information</h4>
                              

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Name</label>


                                        <div class="controls">
                                            <input type="text"
                                                name="hname" class="span8 tip" required>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Address</label>

                                        <div class="controls">
                                            <input type="text" 
                                                name="haddress" class="span8 tip" required>
                                        </div>
                                    </div>







                                   

                            <!-- Schools -->
                            <h4>School Information</h4>
                              
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Name</label>


                                        <div class="controls">
                                            <input type="text"
                                                name="sname" class="span8 tip" required>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Address</label>

                                        <div class="controls">
                                            <input type="text" 
                                                name="saddress" class="span8 tip" required>
                                        </div>
                                    </div>







                                <!-- Markets -->
                                <h4>Market Place Information</h4>
                                

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Name</label>


                                        <div class="controls">
                                            <input type="text"
                                                name="mname" class="span8 tip" required>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Address</label>

                                        <div class="controls">
                                            <input type="text" 
                                                name="maddress" class="span8 tip" required>
                                        </div>
                                    </div>







                                    
                                <!-- Parks -->
                                <h4>Park Information</h4>
                              
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Name</label>


                                        <div class="controls">
                                            <input type="text"
                                                name="pname" class="span8 tip" required>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Address</label>

                                        <div class="controls">
                                            <input type="text" 
                                                name="paddress" class="span8 tip" required>
                                        </div>
                                    </div>






                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" class=" lnk">Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->



    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
