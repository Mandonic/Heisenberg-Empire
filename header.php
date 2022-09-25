<aside aria-label="Slider Area">
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About us</title>
        <link href="courses.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <input type ="checkbox" name ="" id ="chk1">
            <div class="logo"><h1><img src="logo.png" width="100px" style="background:none;" ></h1></div>
                <ul>
                    <li><a href="C:/xampp/htdocs/Heisenberg-Empire/index.html">Home</a></li>
                    <li><a href="#Courses.html">Courses</a></li>
                    <li><a href="#About Us.html">About Us</a></li>
                    <li><a href="#Profile.html">Profile</a></li>
                    <li><a href="#Contact.html">Contact</a></li>
					<div class="navbar-nav">
                		<a href="cart1.php" class="nav-item nav-link active">
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
                </ul>
    </body>
</aside>
