<?php
session_start();
include('../includes/config.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
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

    .icon-edit {
        color: #181818;
        margin-right: 5%;
    }

    .icon-remove-sign {
        color: #db3d52;
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
                                <h3>Manage Information</h3>
                            </div>
                            <div class="module-body table">
                               

                                <br />

                                <h4>Hospitals</h4>
                                <table cellpadding="0" cellspacing="0"
                                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $query=mysqli_query($con,"select * from hospitals");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['address']);?></td>
                                            <td>
                                                <a href="#"><i
                                                        class="icon-edit"></i></a>
                                                <a href="#"><i
                                                        class="icon-remove-sign"></i></a>
                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>

                                </table>

                                <h4>Schools</h4>
                                <table cellpadding="0" cellspacing="0"
                                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $query=mysqli_query($con,"select * from schools");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['address']);?></td>
                                            <td>
                                                <a href="#"><i
                                                        class="icon-edit"></i></a>
                                                <a href="#"><i
                                                        class="icon-remove-sign"></i></a>
                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>

                                </table>

                                <h4>Market Places</h4>
                                <table cellpadding="0" cellspacing="0"
                                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $query=mysqli_query($con,"select * from markets");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['address']);?></td>
                                            <td>
                                                <a href="#"><i
                                                        class="icon-edit"></i></a>
                                                <a href="#"><i
                                                        class="icon-remove-sign"></i></a>
                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>

                                </table>

                                <h4>Parks</h4>
                                <table cellpadding="0" cellspacing="0"
                                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $query=mysqli_query($con,"select * from parks");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
                                        <tr>
                                            <td><?php echo htmlentities($cnt);?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['address']);?></td>
                                            <td>
                                                <a href="#"><i
                                                        class="icon-edit"></i></a>
                                                <a href="#"><i
                                                        class="icon-remove-sign"></i></a>
                                            </td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>

                                </table>
                            </div>
                        </div>



                    </div>

                </div>

            </div>
        </div>

    </div>


    <?php include('include/footer.php');?>

    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>

</body>