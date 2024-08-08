<?php
// include('connection.php'); 
session_start();
// echo"welcome".$_SESSION['user_name'];
// $userprofile = $_SESSION['user_name'];
if (!isset($_SESSION['user_name'])) 
{
   header('location:login.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my docter</title>
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php




?>

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
                            <li class="nav-text btn " style="background-color:#ff00ff;" ;><a
                                    href="logout.php">Logout</a></li>
                            <li class="nav-text">
                                <i class="fa-solid fa-phone red"></i>
                                <a href="tel:8429158627" class="hove-line red">+918429158627</a>
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
                <div class="herosection">
                    <div class="box-left">
                        <section>
                            <div class="text-1 ">
                                <h1>Your Road to Wellness Beging Here</h1>
                            </div>
                            <div class="text-2">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae numquam sit
                                    commodi sunt modi enim molestiae dolore cum.</p>
                            </div>
                            <div class="button ">
                                <a href="register.php" class="btn-1"
                                    target="_blank">New Patint</a>

                                <a href="display.php" class="btn-1 btn2">Veiw appoitment</a>
                            </div>
                        </section>

                    </div>
                    <div class="box-right">
                        <div class="circle-bg"></div>

                        <img src="image/docter.png" alt="doctor">
                    </div>
                </div>


            </div>

        </section>

        <!-- textsection-1 -->
        <section>
            <div class="textsection-1">
                <div class="text-item-box-1">LIVING A LIFE OF HELTH</div>
                <div class="text-item-box-2">
                    <H1>Health care made extraordinary</H1>
                </div>
                <div class="text-item-box-3">Lorem ipsum dolor sit amet ipsum dolor ipsum dolor ipsum dolor sit .</div>


            </div>

            </div>


        </section>
        <!-- card  -->
        <section>
            <div class="card-box">
                <div class="card">
                    <div class="imagsection">
                        <div class="pro-imag">
                        </div>
                        <div class="pro-name">
                            <h1>Dr.humanshu</h1>
                            <p>custmer</p>

                        </div>
                    </div>
                    <div class="txt-section">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                            ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet .
                        </p>

                    </div>
                </div>
                <div class="card">
                    <div class="imagsection">
                        <div class="pro-imag">
                        </div>
                        <div class="pro-name">
                            <h1>Dr.Arpit sahu</h1>
                            <p>custmer</p>

                        </div>
                    </div>
                    <div class="txt-section">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                            ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet .
                        </p>

                    </div>
                </div>
                <div class="card">
                    <div class="imagsection">
                        <div class="pro-imag">
                        </div>
                        <div class="pro-name">
                            <h1>Dr.Shrawan</h1>
                            <p>custmer</p>

                        </div>
                    </div>
                    <div class="txt-section">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                            ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet .
                        </p>

                    </div>
                </div>



                <!-- <a href="#">Discover More</a> -->
            </div>
        </section>

        <!-- viwe  -->

        <section>

            <div class="viwe">
                <div class="viwe-1">
                    <h1>800+</h1>
                    <p>Happy Client</p>
                </div>
                <div class="viwe-1">
                    <h1>20+</h1>
                    <p>Award</p>
                </div>
                <div class="viwe-1">
                    <h1>50+</h1>
                    <p>Our Clinics</p>
                </div>
                <div class="viwe-1">
                    <h1>250+</h1>
                    <p>New custmer</p>
                </div>



            </div>
        </section>
        <section>

            <div class="contener-img">
                <div class="text--section">
                    <h3>For over 20 years,our team has been passsionate & dedicated to helping all members of the family
                        spanning from 101 years young to one day old</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis incidunt hic recusandae,
                        fugiat voluptatem, libero temporibus provident impedi</p>
                    <a href="#">Read more</a>
                </div>
                <div class="img--1"></div>
                <div class="img--2"></div>
            </div>
        </section>

        <section>
            <div class="textsection-1">
                <div class="text-item-box-1">LIVING A LIFE OF HELTH</div>
                <div class="text-item-box-2">
                    <H1>Your Home to Wellness</H1>
                </div>
                <div class="text-item-box-3">Lorem ipsum dolor sit amet ipsum dolor ipsum dolor ipsum dolor sit .</div>


            </div>

            </div>


        </section>


        <section>
            <div class="card-box-main-grid">
                <div class="card-11">
                    <div class="log-chiro">
                        <img src="image/chiropractic.png">
                    </div>
                    <h1>chiropractic</h1>
                    <div class="tex-card-11">
                        <p>Lorem ipsum dolor sit amet dolor sit amet ,sit amet elit.</p>
                    </div>
                    <a href="#" class="read-more">Read More <i class="fa-solid fa-right-long"></i></a>

                </div>
                <div class="card-11">
                    <div class="log-chiro">
                        <img src="image/mental health.jpg">
                    </div>
                    <h1>Therapy</h1>
                    <div class="tex-card-11">
                        <p>Lorem ipsum dolor sit amet dolor sit amet ,sit amet elit.</p>
                    </div>
                    <a href="#" class="read-more">Read More <i class="fa-solid fa-right-long"></i></a>

                </div>
                <div class="card-11">
                    <div class="log-chiro">
                        <img src="image/nutrition.jpg">
                    </div>
                    <h1>Nutrition</h1>
                    <div class="tex-card-11">
                        <p>Lorem ipsum dolor sit amet dolor sit amet ,sit amet elit.</p>
                    </div>
                    <a href="#" class="read-more">Read More <i class="fa-solid fa-right-long"></i></a>

                </div>
                <div class="card-11">
                    <div class="log-chiro">
                        <img src="image/massage.PNG">
                    </div>
                    <h1>Massage</h1>
                    <div class="tex-card-11">
                        <p>Lorem ipsum dolor sit amet dolor sit amet ,sit amet elit.</p>
                    </div>
                    <a href="#" class="read-more">Read More <i class="fa-solid fa-right-long"></i></a>

                </div>

            </div>


            <div class="discriv-more">
                <div class="btn">
                    <a href="#">Discover More</a>
                </div>
            </div>

        </section>
        <section>
            <div class="test-section-5">
                <div class="test-section-6">
                    <h1>Redy to take the next step?</h1>
                    <p>New Patint Special offer</p>
                </div>
                <div class="btn--5">
                    <a href="#">Request as a Patint<i class="fa-solid fa-right-long"></i></a>
                </div>
            </div>
        </section>
        <section>
            <div class="main-contener-img">


                <div class="tran-image">
                    <div class="image--22"></div>
                    <div class="text--22">
                        <button>FILLING GOOD</button>
                        <h1>Emproving every <br> of your life</h1>
                        <ul>
                            <li><i class="fa-solid fa-check"></i> Rehab a Sports injury</li>
                            <li><i class="fa-solid fa-check"></i>Bounce Back after giving birth</li>
                            <li><i class="fa-solid fa-check"></i>Kick your Migraines to the curb</li>
                            <li><i class="fa-solid fa-check"></i>Clean Up your Dite</li>

                        </ul>
                        <div class="discriv-more discriv-more-2 ">
                            <div class="btn btn-5">
                                <a href="#">Discover More</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


        <section>
            <div class="textsection-1">
                <div class="text-item-box-1"
                    style="padding: .8rem 1rem; border-radius:10rem; background-color: rgb(128, 124, 124);">QUR BLOG
                </div>
                <div class="text-item-box-2">
                    <H1>Latast news</H1>
                </div>
                <div class="text-item-box-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo quae
                    dolor facilis eos distinctio debitis voluptatem praesentium amet corrupti alias, sapiente soluta
                    eligendi nesciunt voluptate id delectus, repudiandae, impedit perferendis.</div>


            </div>

            </div>


        </section>






    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



</body>

</html>

