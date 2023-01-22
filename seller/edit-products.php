
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Portal</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>

    <style>
    .control-group .controls input:focus {
        outline: none !important;
        border: 1px solid #181818;
        box-shadow: 0 0 2px #999999;
        color: #000000;

    }

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
    </style>
   
</head>

<body>
    <?php include('include/header.php');?>

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php include('include/sidebar.php');?>
                <div class="span8">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Update Information</h3>
                            </div>
                            <div class="module-body">

                              



                                <br />

                                <form class="form-horizontal row-fluid" name="insertinfo" method="post"
                                    enctype="multipart/form-data">

                                

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Address</label>
                                        <div class="controls">
                                            <input type="text" name="address" placeholder="Enter address"
                                                value="">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Area</label>
                                        <div class="controls">
                                            <input type="text" name="area"
                                                placeholder="Enter area"
                                                value=""
                                                class="span8 tip" required>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Size</label>
                                        <div class="controls">
                                            <input type="text" name="size" placeholder="Enter house size"
                                                value=""
                                                class="span8 tip" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">No. of Bedrooms</label>
                                        <div class="controls">
                                            <input type="text" name="bedroom" placeholder="Enter number of bedrooms"
                                                value=""
                                                class="span8 tip" required>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">No. of Bathrooms</label>
                                        <div class="controls">
                                            <input name="bathrooms" placeholder="Enter number of bathrooms"
                                                rows="6"  value="" class="span8 tip">

</input>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Price</label>
                                        <div class="controls">
                                            <input type="text" name="price" placeholder="Enter house price"
                                                value=""
                                                class="span8 tip">
                                        </div>
                                    </div>


                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">House Image</label>
                                        <div class="controls">
                                            <img src="">Change Image</a>
                                        </div>
                                    </div>






                              
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" class="lnk">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>





                    </div>
                    <!--/.content-->
                </div>
                <!--/.span8-->
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