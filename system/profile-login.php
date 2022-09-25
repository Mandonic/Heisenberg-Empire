<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            /*change link */
            header("Location: index-login.html");
            exit;
        }
    }
   
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">


<aside aria-label="Nav bar">
   <head>
      <title>Profile</title>
      <link href="style.css" rel="stylesheet">
     
      

   </head>
   <body>
      
      <header>
         
         <input type ="checkbox" name ="" id ="chk1">
         <div class="logo"><h1><img src="Logo.png" width="100px"></h1></div>
               <ul>
                  <li><a href="#Home.html">Home</a></li>
                  <li><a href="#Courses.html">Courses</a></li>
                  <li><a href="#About Us.html">About Us</a></li>
                  <li><a href="#Profile.html">Profile</a></li>
                  <li><a href="#Contact.html">Contact</a></li>
                  <li><a href="#Cart.html"> <img src="basket-cart-icon-27.png" width="20px" display="block" alt="Cart"> </a></li>
               </ul>
   </body>
</aside>

<aside aria-label="Log&Reg Form">
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Log-in Form
            </div>
            <div class="title signup">
               Sign-up Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Sign up</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                 
               <form  class="login" method="post" >
                      <?php if ($is_invalid): ?>
                        <em>Invalid login</em>
                     <?php endif; ?>
                  <div class="field">
                     <input type="email" name="email" id="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" id="password" placeholder="Password" required>
                  </div>
                
                  <div class="pass-link">
                     <a href="#"></a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Sign up now</a>
                  </div>
               </form>
               <form action="#" class="signup">
                  <div class="field">
                     <input type="text" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup">
   </body>
   <script> /* For tranistion from Login to Signup */
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
         loginForm.style.marginLeft = "-50%";
         loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
         loginForm.style.marginLeft = "0%";
         loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
         signupBtn.click();
         return false;
      });
   </script>
</aside>

