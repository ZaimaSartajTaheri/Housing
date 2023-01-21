<?php error_reporting(0); ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<style>
.widget-menu a {
    display: block;
    line-height: 20px;
    padding: 15px;
    text-decoration: none !important;

}

.widget-menu .menu-icon {

    margin-right: 10px;

    color: #181818;

}

.widget-menu>li>a {
    background-color: #c0f090;
    color: #181818;
    text-decoration: none;
    font-weight: bold;
}

.widget-menu>li>a:hover {
    background-color: #c0f090;
    color: black;
}

.widget-menu>li>a:hover .menu-icon {
    color: black;
}


.sidebar {
    margin-top: 3%;
}
</style>
<div class="span3">
    <div class="sidebar">


        <ul class="widget widget-menu unstyled">
           
            <li>
                <a href="#">
                    <i class="menu-icon icon-group"></i>
                    Manage users
                </a>
            <li><a href="#"><i class="menu-icon icon-tasks"></i>House Owner Information</a></li>
            </li>
        </ul>


        <ul class="widget widget-menu unstyled">
            <script src="https://use.fontawesome.com/c6b0374cee.js"></script>
          
            <li><a href="insert-product.php"><i class="menu-icon icon-paste"></i>Insert Information </a></li>
            <li><a href="manage-products.php"><i class="menu-icon icon-table"></i>Manage Information </a></li>

        </ul>
        <!--/.widget-nav-->

        <ul class="widget widget-menu unstyled">
            <li><a href="change_password.php"><i class="menu-icon icon-key"></i>Change Password</a></li>
            <li><a href="#"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>
            <li><a href="#"><i class="menu-icon icon-tasks"></i>House Owner Login Log </a></li>

            <li>
                <a href="adminlogout.php">
                    <i class="menu-icon icon-signout"></i>
                    Logout
                </a>
            </li>
        </ul>

    </div>
    <!--/.sidebar-->
</div>
<!--/.span3-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>