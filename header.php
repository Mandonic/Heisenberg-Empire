<div class="header">
        
        
    <a href="CART.php" class="navbar-brand">
         <input type ="checkbox" name ="" id ="chk1">
                <div class="logo"><h1><img src="Logo.png" width="100px"></h1></div>
                    <div class="search-box">
                        <form>
                            <input type ="text" name ="search" id ="srch" placeholder="Search">
                            <button type ="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <ul>
                        <li><a href="#Home.html">Home</a></li>
                        <li><a href="#Courses.html">Courses</a></li>
                        <li><a href="#About Us.html">About Us</a></li>
                        <li><a href="#Profile.html">Profile</a></li>
                        <li><a href="#Contact.html">Contact</a></li>
                        
                </a>
                <button class="navbar-toggler"
                    type="button"
                        data-toggle="collapse"
                        data-target = "#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="mr-auto"></div>
                    <div class="navbar-nav">
                        <a href="cart.php" class="nav-item nav-link active">
                            <h5 class="px-5 cart">
                                <i class="fas fa-shopping-cart"></i> Cart
                                <?php

                                if (isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                                }else{
                                    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                                }

                                ?>
                            </h5>
                        </a>
                    </div>
                </div>

            
        </div>

