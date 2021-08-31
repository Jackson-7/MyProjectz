<nav class="navbar navbar-expand-xl " style="background-color: #050E32 ;">
    <a class="navbar-brand"  href="mainpg.php">
        <img src="images/360_fit_white.svg" style="width: 8em; height: 3em; " alt="" loading="lazy">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse navbar-fluid" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto  mt-lg-0 mr-3">
            <li class="nav-item" style="margin-top:0.4em; font-size:22px;">
                <a class="nav-link mr-3" style="color:#fff"  href="care.php">Care</a>
            </li>
            <li class="nav-item" style="margin-top:0.4em; font-size:22px;">
                <a class="nav-link mr-3" style="color:#fff"  href="gymplan.php">Gym Plan</a>
            </li>
            <li class="nav-item" style="margin-top:0.4em; font-size:22px;">
                <!-- <a class="nav-link mr-3" style="color:#fff"  href="360_shop.php">Shop</a> -->
                <form method="post" style="margin-top:0em;">
                    <button name="logout"  class="nav-light btn text-light" style="font-size:22px;" > Logout </button>
                </form>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <!--            <i class="fa fa-user"></i>-->
                    <img src="<?php echo $_SESSION["img"]; ?>" style="width: 3em; height: 3em; border-radius: 50%;"  alt="DP">
                    <!-- images/user.svg -->
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default"
                     aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="cart.php">Cart</a>
                    <a class="dropdown-item" href="myorder.php">My Orders</a>
                    <a class="dropdown-item" href="myplan.php">My plan</a>
                    <a class="dropdown-item" href="mygymplan.php">My Gym Plan</a>
                </div>
            </li>
        </ul>


    </div>
</nav>