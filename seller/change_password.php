
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Portal</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <style>
    .lnk {
        background-color: #db3d52 !important;
        color: #FFFFFF !important;
        font-size: 14px !important;
        font-weight: bold !important;
        box-shadow: none !important;
        border-radius: 7%;
        border: none;
        padding: 1.2%;
    }
    </style>
    
    <style>
    .control-group .controls input:focus {
        outline: none !important;
        border: 1px solid #181818;
        box-shadow: 0 0 2px #999999;
        color: #000000;

    }

    .lnk {
        background-color: #db3d52 !important;
        color: #FFFFFF !important;
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
                            <div class="module-head">
                                <h3>Seller Change Password</h3>
                            </div>

                            <div class="module-body">


                               
                                <br />

                                <form class="form-horizontal row-fluid" name="chngpwd" method="post"
                                    onSubmit="return valid();">

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Current Password</label>


                                        <div class="controls">
                                            <input type="password" placeholder="Enter your current Password"
                                                name="password" class="span8 tip" required>
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">New Password</label>

                                        <div class="controls">
                                            <input type="password" placeholder="Enter your new current Password"
                                                name="newpassword" class="span8 tip" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Re-type New Password</label>

                                        <div class="controls">
                                            <input type="password" placeholder="Enter your new Password again"
                                                name="confirmpassword" class="span8 tip" required>
                                        </div>
                                    </div>






                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" class=" lnk">Submit</button>
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
