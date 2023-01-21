<?php 
session_start();
error_reporting(0);
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <style>
    .search-bar {
        width: 25vw !important;
        border-top-right-radius: 0 !important;
        border-bottom-right-radius: 0 !important;

    }

    .search-bar:focus {
        outline: none !important;
        box-shadow: 0 0 0 #b3ed7a;
    }

    .search-bar,
    .navbar-toggler {
        border: 2px solid #c0f090 !important;
    }

    .search-button {
        border-top-left-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        background-color: #c0f090 !important;
        color: white !important;


    }

    .search-button:hover {
        background-color: #b3ed7a;
        color: white;
    }
    

    .homepage{
        height: 400px !important;

    }
    .headline{
        margin-top:100px;
        color: #41720f ;
    }
    .middle{
        margin-top: 10%;
    }

    </style>


</head>

<body>
    <header>
        <?php include('includes/header.php');?>
    </header>
    <div class="body-content">
        <div class="container">
            <div class="furniture-container homepage-container">

                <div class="row middle">

                    <div class="col">

                    <img src="./assets/images/homepage.jpeg" class="d-block w-100 homepage" alt="...">

                    </div> 
                    <div class="col">
                       
                    <h3 class="headline">Search Your Location Here</h3>

                    <?php
                        if(strlen($_SESSION['login'])==0)
                        {     ?>
                          <form name="search" method="post" action="SignupLogin.php" class="form-inline mr-auto my-lg-0 sea2">
                    <input class="form-control search-bar" type="search" name="product" required="required"
                        placeholder="Search" aria-label="Search">
                    <button class="btn my-2 my-sm-0 search-button" type="submit" name="submit" id="submit"><i
                            class="fas fa-search"></i></button>
                     </form>

                            
                             <?php } else{?>
                                <form name="search" method="post" action="hospitals.php" class="form-inline mr-auto my-lg-0 sea2">
                            <input class="form-control search-bar" type="search" name="product" required="required"
                                placeholder="Search" aria-label="Search">
                            <button class="btn my-2 my-sm-0 search-button" type="submit" name="submit" id="submit"><i
                                    class="fas fa-search"></i></button>
                             </form>
                                
                                <?php }?>
                      
                    

                  
                    </div> 
                </div>               
            </div>               
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