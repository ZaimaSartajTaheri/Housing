
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    .navbar-brand,
    .nav-link {
        color: #41720f ;
    }

    .nav-link:hover {
        color: #41720f;
        transform: scale(1.1);
    }

    .nav-link {
        font-size: 17px;
    }
   

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(65, 114, 15, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E") !important;
    }

    .logo {
        height: 120px;

    }
    .itemul{
        margin-left: 70%;
    }


    </style>


</head>

<body>


    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand mb-5" href="index.php"><img class="logo" src="logo.jpg" alt="" /></a>
            <button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

               
                <ul class="navbar-nav itemul">

             
                  




                   
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class=" fas fa-store"></i>
                            Sell</i></a>
                    </li>

                  


                    <?php 
                    if(strlen($_SESSION['login'])==0)
                            {   if(strlen($_SESSION['alogin'])!==0) {    ?>
                    <li><a class="nav-link" href="admin/change_password.php">Admin Portal</a></li>
                    <li><a class="nav-link" href="admin/change_password.php"><i class="icon fa fa-user"></i>
                            <?php echo htmlentities( $_SESSION['adminname']);?></a></li>
                    <li><a class="nav-link" href="admin/adminlogout.php"><i class="icon fa fa-sign-out"></i>Logout</a>
                    </li>
                    <?php   } else{?>
                    <li class="nav-item">
                        <a class="nav-link" href="SignupLogin.php"><i class="fas fa-user"></i>

                            Account</a>
                    </li>
                    <?php }} else{
                            ?>

                    <li><a class="nav-link" href="my-account.php"><i class="icon fa fa-user"></i>
                            <?php echo htmlentities($_SESSION['username']);?></a></li>
                    <li><a class="nav-link" href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
                    <?php }  ?>
                </ul>
            </div>
        



    <!-- </div> -->
    </nav>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/6ad32c1b9a.js" crossorigin="anonymous"></script>


</body>

</html>