<?php

require_once("component.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
	<link href="style2.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!--Font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">

</head>
<body>
<!--nav bar-->
<div class="header">
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
                <li><a href="#Cart.html"> <img src="basket-cart-icon-27.png" width="20px" display="block" alt="Cart"> </a></li>
            </ul>
            <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
            </div>
<div class="container">
    <div class="row text-center py-5">
    <?php
    component("How To Cook Crystal Meth","250","Walter White","./how to cook meth unedited.jpg");
    component("How To Smuggle Meth","250","Jesse Pinkmann","./how to smuggle meth unedited.png");
    component("How To Avoid Conflict","250","Saul Goodmann","./how to avoid conflict unedited.jpg");
    component("How To Avoid Hank","150","Gustavo","./how to avoid hank unedited.png");
    component("How to Divorce Your Wife After Getting Rich","250","Walter White","./how to divorce your wife after getting rich.jpg");
    component("How To Get Rid of Your Son","200","Walter White","./how to get rid of ur son unedited.jpg");
    component("How To Make Money","250","Jesse Pinkmann","./how to make money unedited.jpg");

    component("How To Bankrupt Your Man","250","Saul Goodmann","./skyler.jpg")
    ?>
    </div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>