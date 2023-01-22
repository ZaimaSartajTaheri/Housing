
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Owner Portal</title>
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
    <?php include('include/header.php');?>

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php include('include/sidebar.php');?>
                <div class="span8">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Update House Image</h3>
                            </div>
                            <div class="module-body">

                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong>
                               


                                <br />

                                <form class="form-horizontal row-fluid" name="insertinfo" method="post"
                                    enctype="multipart/form-data">





                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Current House Image</label>
                                        <div class="controls">
                                            <img src=""
                                                width="200" height="100">
                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">New Image</label>
                                        <div class="controls">
                                            <span class="btn btn-primary btn-file">
                                                Browse...<input type="file" name="houseimage1" id="houseimage1"
                                                    value="" class="span8 tip" required>
                                            </span>
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

                </div>

            </div>
        </div>

    </div>




    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>

</body>