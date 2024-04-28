<?php
include('connection.php');
session_start();
$email= $_SESSION['email'];
$sql= "SELECT * FROM movie_registration WHERE email='$email'";
$data= mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($data))
{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Movie Design</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">Movie+</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <a href="duplicatehome.php">
                    <li class="menu-list-item active">Home</li></a>
                    <a href="movies.php">
                    <li class="menu-list-item">Movies</li></a>
                    <a href="mybooking.php">
                    <li class="menu-list-item">My Bookings</li>
                    </a>
                </ul>
            </div>
            <div class="profile-container">
                <div class="profile-text-container">
                    <a class="nav-item nav-link" style="color: green;" href="signup.html"><span class="profile-text"><?php echo " Welcome, ".$row['name'] ?></span></a>
                    <a class="nav-item nav-link" style="color: red;" href="homepage.php"><span class="profile-text">Logout</span></a>
                    
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content-container">
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/1649315336416_kgfnewweb.avif');">
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/MV5BMjMwMDgyOGQtMWZjNC00MDUwLTllZDYtZWM3NDBmN2YzNGZmXkEyXkFqcGdeQXVyMTQzNjkzMzEw._V1_.jpg" alt="">
                            <!-- <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                            <a href="kgf.html">
                            <button class="movie-list-item-button">Book Now</button>
                        </a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/FFWsXd4VUAAwYxr.jpeg" alt="">
                            <!-- <span class="movie-list-item-title">Star Wars</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="rrr.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/MV5BNWM0ZGJlMzMtZmYwMi00NzI3LTgzMzMtNjMzNjliNDRmZmFlXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UX1000_.jpg" alt="">
                           <!--  <span class="movie-list-item-title">Storm</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="doctor.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/Jersey_2022_poster.jpg" alt="">
                            <!-- <span class="movie-list-item-title">1917</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="jersey.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/runway-34-poster.webp" alt="">
                            <!-- <span class="movie-list-item-title">Avengers</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="runway.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/FAThSHtVEAQOuQu.jpg" alt="">
                         <!--    <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="heropanti2.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/Kishmish-Movie-Cast-and-Crew-Wiki-Review-Release-Date-Trailer-Budget-Box-Office-Real-Name-Watch-Online-OTT.jpeg" alt="">
                            <!-- <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="kishmish.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
                  <!--   </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div> -->
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">Upcoming Movies</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/bhool.jpg" alt="">
                           <!--  <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="bhool.html">                            
                                    <button class="movie-list-item-button">Book Now</button></a>

                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/thor.jpg" alt="">
                            <!-- <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="thor.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/mystery.jpg" alt="">
                            <!-- <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="ironmask.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="img/prithvi.jpg" alt="">
                            <!-- <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p> -->
                                <a href="prithviraj.html">
                            <button class="movie-list-item-button">Book Now</button>
                            </a>
                        </div>
            </div>
            <div class="featured-content"
                style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-2.jpg');">
                <img class="featured-title" src="img/1645432040233_web.avif" alt="">
            </div>
        </div>
    </div>
    <script src="js/homepage.js"></script>
</body>
</html>
<?php
}
?>