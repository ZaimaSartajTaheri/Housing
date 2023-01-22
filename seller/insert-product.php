
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> House Owner Portal</title>
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
        color: black;

    }

    .lnk {
        background-color: #a8f090 !important;
        color: black !important;
        font-size: 14px !important;
        font-weight: bold !important;
        box-shadow: none !important;
        border-radius: 7%;
        border: none;
        padding: 1.2%;
    }

    .custom-select {
        outline: none !important;
        border: 1px solid #181818 !important;
        box-shadow: 0 0 2px #999999 !important;
        color: black !important;
    }

    .btn-file {
        position: relative;
        overflow: hidden;
        background-color: #c0f090 !important;
        color: black !important;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;

        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
    </style>
  
</head>

<body>
    <?php include('include/header.php');
    ?>
    <div class="wrapper">
        <div class="container">
            <div class="row"><?php include('include/sidebar.php');
                                           ?>
                <div class="span8">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>Insert Info</h3>
                            </div>
                            <div class="module-body">
                                <?php if(isset($_POST['submit'])) {
                                    ?><div class="alert alert-success"><button type="button" class="close"
                                        data-dismiss="alert">×</button><strong>Well done !</strong></div><?php
                                             }

                                             ?><br />
                                <form class="form-horizontal row-fluid" name="insertinfo" method="post"
                                    enctype="multipart/form-data">
                                    <div class="control-group"><label class="control-label" for="basicinput">House Owner Name</label>
                                        <div class="controls"><input type="text" class="span8 tip" name="hoName" required value=""></div>
                                    </div>
                                    <div class="control-group"><label class="control-label" for="basicinput">Address</label>
                                        <div class="controls"><input type="text" placeholder="Enter Address" class="span8 tip" name="address" required></div>
                                    </div>
                                    
                                    
                                    <div class="control-group"><label class="control-label" for="basicinput">House Size</label>
                                        <div class="controls"><input type="text" placeholder="Enter size of the house" class="span8 tip" name="size" required></div>
                                    </div>
                                    
                                   
                                    
                                    <div class="control-group"><label class="control-label" for="basicinput">Area</label>
                                        <div class="controls"><input type="text" name="area"
                                                placeholder="Enter area name" class="span8 tip" required>
                                        </div>
                                    </div>
                                    <div class=" control-group"><label class="control-label" for="basicinput">No. of Bedrooms</label>
                                        <div class="controls"><input type="text" name="bedroom"
                                                placeholder="Enter No. of bedrooms" class="span8 tip" required>
                                        </div>
                                    </div>
                                    <div class="control-group"><label class="control-label" for="basicinput">No. of bathrooms</label>
                                        <div class="controls"><input type="text" name="bathrooms"
                                                placeholder="Enter No. of bathrooms" class="span8 tip" required></div>
                                    </div>
                                    <div class="control-group"><label class="control-label" for="basicinput">Contact No.</label>
                                        <div class="controls"><input type="text" class="span8 tip" name="contact"  required value="" ></div>
                                    </div>
                                    <div class="control-group"><label class="control-label" for="basicinput">Selling Price</label>
                                        <div class="controls"><input name="price"
                                                placeholder="Enter Price" rows="6"
                                                class="span8 tip"></input></div>
                                    </div>
                                    <div class="control-group"><label class="control-label" for="basicinput">Product
                                            Image1</label>
                                        <div class="controls"> <span class="btn btn-primary btn-file">
                                                Browse...<input type="file" name="houseimage1" id="houseimage1"
                                                    value="" class="span8 tip" required>
                                            </span></div>
                                    </div>
                                    
                                    <div class="control-group">
                                        <div class="controls"><button type="submit" name="submit"
                                                class=" lnk">Insert</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../admin/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>