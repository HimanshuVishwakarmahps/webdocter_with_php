<!-- aply session on login page  -->
 <?php
  session_start();
 ?>



<?php 
include ("connection.php"); 
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>my docter</title>
        <link rel="stylesheet" href="style_login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        <!-- hader  -->
        <header>
            <nav>
                <div class="navbar ">
                    <a class="logo" href="#">
                        <img src="image/logo.png" alt="logo">
                    </a>
                    <div class="navtxt flex">
                        <ul>
                            <li class="nav-text"><a href="#" class="hove-line">Home</a></li>
                            <li class="nav-text"><a href="#" class="hove-line">Services</a></li>
                            <li class="nav-text"><a href="#" class="hove-line">Team</a></li>
                            <li class="nav-text"><a href="#" class="hove-line">Testimonial</a></li>
                            <li class="nav-text"><a href="#" class="hove-line">About</a></li>
                            <li class="nav-text"><a href="#" class="hove-line">Contact</a></li>
                            <div class="flex btn-section">
                                <li class="nav-text btn "><a href="#">Login</a></li>
                                <li class="nav-text">
                                    <i class="fa-solid fa-phone red"></i>
                                    <a href="#" class="hove-line red">+91 8429158627</a>
                                </li>
                            </div>

                        </ul>

                    </div>
                </div>


            </nav>
        </header>
        <!-- heroSection -->

        <main>
            <section>

                <div class="hero">
                    <div class="login">
                        <div class="textbox">
                            <div class="web_logo">
                                <img src="image/logo.png">
                            </div>
                            <div class="web_logo">
                                <h1>Login ?</h1>
                            </div>
                            <form action="#" method="POST">
                                <div class="inputfield">
                                    <input type="text" placeholder="Enter Email" name="username" required />
                                    <input type="password" placeholder="Enter password" name="password" required />

                                </div>
                                <div class="btnsection">
                                    <input type="submit" value="login" class="loginbtn" name="login" />
                                    <a class="createAcount" href="createAccount.php">Create Account</a>
                                </div>
                            </form>



                        </div>
                        <div class="imagbox">
                            <img src="image/docter.png">
                        </div>
                    </div>
                </div>

            </section>
        </main>




    </body>

    </html>


<?php
   if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];



    $query="SELECT * FROM createaccount WHERE Email='$username' && password='$password' ";

    $result=mysqli_query($conn, $query);

    $total=mysqli_num_rows($result);
    // echo $total;

    if ($total == 1) {
        // apply session
        $_SESSION['user_name'] = $username; 
        header('location:http://localhost/webdocter/home_page/login/index.php');  
        
    }
    else {
        
        echo "<script>alert('Enter carect user name and password😎')</script>";
   }
}

?>