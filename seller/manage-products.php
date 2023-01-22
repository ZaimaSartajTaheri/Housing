
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Portal</title>
    <link type="text/css" href="../admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../admin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="../admin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
    <style>
    .control-group .controls input:focus {
        outline: none !important;
        border: 1px solid #181818;
        box-shadow: 0 0 2px #999999;
        color: #000000;

    }

    .icon-edit {
        color: #181818;
        margin-right: 5%;
    }

    .icon-remove-sign {
        color: #db3d52 !important;
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
                                <h3>House Information</h3>
                            </div>
                            <div class="module-body table">
                           
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Oh snap!</strong>
                                   
                                </div>
                               

                                <br />


                                <table cellpadding="0" cellspacing="0"
                                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Address</th>
                                            <th>Area</th>
                                            <th>Size</th>
                                            <th>No. of Bedrooms</th>
                                            <th>No.of Bathrooms</th>
                                            <th>Price</th>
                                            <th>Contact No.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>></td>
                                            <td> </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                              <i
                                                        class="icon-edit"></i></a>
                                                <a href="manage-products.php"
                                                    onClick="return confirm('Are you sure you want to delete?')"><i
                                                        class="icon-remove-sign"></i></a>
                                            </td>
                                        </tr>
                                    

                                </table>
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