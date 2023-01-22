<?php
session_start();
error_reporting(0);
include('includes/config.php');

$area=$_GET['area'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Portal Home Page</title>
    <!-- Bootstrap Core CSS -->


    <!-- Customizable CSS -->
    <style>
   
    
     .item{
      color: black !important;
    }

    .item:hover {
        color: black !important;
        transform: scale(1.1);
    } 
    .list{
        margin-right:40%;
    }

    .nav-link {
        font-size: 17px;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(65, 114, 15, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E") !important;
    }
   .items{
    background-color: #c0f090;
  
   }
   .infof{
    margin-top: 5%;
   }
   .house-info .name a {
        color: #000000;
        text-decoration: none;
    }

    .product-info .name a:hover {
        color: #000000;
        text-decoration: none;
    }
    .image{
        margin-left: 10%;
    }
    .text-left{
        margin-left: 30%;
    }
  

    </style>



    <!-- Demo Purpose Only. Should be removed in production -->

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>




</head>

<body>
<header>
        <?php include('includes/header.php');?>
    </header>

    <div class="body-content outer-top-xs items">
    <div class="container ">
        <nav class="navbar navbar-expand-lg">
          
            <button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

               
                <ul class="navbar-nav">


                    <li class="nav-item list">
                        <a class="nav-link  item" href="hospitals.php?area=<?php echo htmlentities($area);?>">Hospitals</a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link  item" href="schools.php?area=<?php echo htmlentities($area);?>">Schools</a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link  item" href="markets.php?area=<?php echo htmlentities($area);?>">Markets</a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link  item" href="parks.php?area=<?php echo htmlentities($area);?>">Parks</a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link item" href="#">Vacant Houses</a>
                    </li>

                </ul>
           </div>
    </nav>
    </div>
    </div>

    <!-- select orders.productId as opid,orders.orderDate as odate,orders.id as orderid from orders join users on orders.userId=users.id where orders.userId='$userid' -->
   
    <?php $query=mysqli_query($con,"select house_info.id as hid,house_info.Area as Area,house_info.Address as Address,house_owner.name as name,house_owner.email as email,house_owner.contactNo as contactNo,house_info.Price as Price,house_info.NoBedrooms as NoBedrooms,house_info.NoBath as NoBath,house_info.houseimage1 as houseimage1 from house_info join house_owner on house_info.ho_id=house_owner.id");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ if($row['Area']==$_GET['area']){
?>
<div class="row infof">
        <div class="image">
        <img src="admin/houseimages/<?php echo htmlentities($row['hid']);?>/<?php echo htmlentities($row['houseimage1']);?>"
                                                                data-echo="admin/houseimages/<?php echo htmlentities($row['hid']);?>/<?php echo htmlentities($row['houseimage1']);?>"
                                                                width="500" height="300" alt="" />
        </div>
        <div class="house-info text-left">
            <p><?php echo htmlentities($row['Address']);?> <br>
            <p>Owner Name: <?php echo htmlentities($row['name']);?> <br>
            <p>Owner Email: <?php echo htmlentities($row['email']);?> <br>
            <p>Owner Mobile: <?php echo htmlentities($row['contactNo']);?> <br>
            <p>Price: <?php echo htmlentities($row['Price']);?> <br>
            <p><?php echo htmlentities($row['NoBedrooms']);?> Bed, <?php echo htmlentities($row['NoBath']);?> Baths</p>
        </div>
    </div>

<?php $cnt=$cnt+1; } }?>

  
</body>


</html>