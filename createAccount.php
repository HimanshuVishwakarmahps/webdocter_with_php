<?php
include ("connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create Account</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="createAccount.css">
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
                            <!-- <li class="nav-text btn "><a href="#">Login</a></li> -->
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
                        <div class="heading">
                            <h1>Create New Account</h1>
                        </div>
                        <form action="#" method="POST">
                            <div class="inputsection">
                                <input type="text" placeholder="Enter Username" name="Username" required>
                                <input type="text" placeholder="Email" name="Email" required>
                                <input type="text" placeholder="password" name="Password" required>
                                <input type="text" placeholder="ConfirmPassword" name="ConfirmPassword" required>

                            </div>
                            <div class="Submitbtn">
                                <input type="submit" value="Submit" class="btn" name="Submit" />
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

<!-- php code for create account  -->

<?php
if (isset($_POST['Submit'])) {
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirmPassword = $_POST['ConfirmPassword'];

    $query = "INSERT INTO createaccount (Username,Email,password,confirmPassword) VALUES('$username','$email','$password','$confirmPassword')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert(' your forme successful submitted ||thank your😊 ')</script>";
        header("Location: http://localhost/webdocter/home_page/");
    } else {
        echo "<script>alert('NOT CREATE YOUR ACCOUNT 😊 ')</script>";
    }

}


?>