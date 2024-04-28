<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Flix
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="css/moviegrid.css">
    <link rel="stylesheet" href="css/movieapp.css">
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="navbar">
                <div class="navbar-container">
                    <div class="logo-container">
                        <h1 class="logo">Movie+</h1>
                    </div>
                    <div class="menu-container">
                        <ul class="menu-list">
                            <a href="homepage.php">
                            <li class="menu-list-item active">Home</li></a>
                            <a href="movies.php">
                            <li class="menu-list-item">Movies</li></a>
        
                        </ul>
                    </div>
                    <!-- <div class="profile-container">
                        <img class="profile-picture" src="img/profile.jpg" alt="">
                        <div class="profile-text-container">
                            <span class="profile-text">SignUp</span>
                        </div>
                        <div class="toggle">
                            <i class="fas fa-moon toggle-icon"></i>
                            <i class="fas fa-sun toggle-icon"></i>
                            <div class="toggle-ball"></div>
                        </div>
                    </div> -->
                </div>
                 <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./img/black-banner.png" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                IPL 2022
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>5+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Watch the all new IPL matches with the latest players only on movie+. Avail exciting discounts and coupons. Engage in an entertaining movie-hall-cum-match experience. Cheer out loud with all your mirth! Don't miss this once-in-a-million chance!
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./img/supergirl-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Unlock the tastiest binges
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>190 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>10+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Pre-book your movie munchies on Movie+.
                                <ul>
                                    <li>Contactless F&B</li>
                                    <li>Avail Exclusive offers</li>
                                    <li>Avoid crowding at the concession</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <img src="./img/wanda-banner.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                Discounts bigger than your appetite!
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>10</span>
                                </div>
                                <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>150 mins</span>
                                </div>
                                <div class="movie-info">
                                    <span>HD</span>
                                </div>
                                <div class="movie-info">
                                    <span>9+</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Book your movie tickets now and get discounts at top restaurants near your cinema. Indulge in a mouth-watering and delicious meal with top meals and beverages. With amazing offers and discounts, you will not regret this chance!
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="./img/series/supergirl.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Batman
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>176 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="./img/movies/captain-marvel.png" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Captain Marvel
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.8</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>124 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>8+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="./img/cartoons/demon-slayer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Morbius
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>105 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="./img/movies/blood-shot.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Bloodshot
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>5.7</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>109 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="./img/series/wanda.png" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Spider-Man: No Way Home
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.4</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>148 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <div class="movie-item">
                    <img src="./img/movies/bat-man.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Dark Knight
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>9</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>152 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
        <!-- END TOP MOVIES SLIDE -->
    </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest movies
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/movies/theatre-dead.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Theatre of the dead
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>5.4</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>84 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>18+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/movies/transformer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Transformers: The Last Knight
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>5.2</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>149 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/movies/resident-evil.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Resident Evil
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.6</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>18+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/movies/room-203.png" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Room 203
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>4.7</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>104 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>18+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/movies/hunter-killer.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Hunter Killer
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.6</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>124 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>18+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/movies/uncharted.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Uncharted
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.4</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>118 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>15+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/movies/call.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Call
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>7.1</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>112 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>18+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->

    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest anime
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/series/anime1.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Jujutsu Kaisen 0
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>7.9</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>105 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>18+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/series/stranger-thing.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            My Hero Academia: World Heroes' Mission
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>7.1</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>105 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/series/belle.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Belle
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>7.2</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>122 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>12+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/series/penthouses.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Detective Conan: The Scarlet Bullet
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.1</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>110 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/series/mandalorian.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Evangelion: 3.0+1.0 Thrice Upon a Tim
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>155 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>16+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/series/the-falcon.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Sailor Moon Eternal
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.9</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>160 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>14+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/series/gintama.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Gintama: The Very Final
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.4</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>104 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->

    <!-- LATEST CARTOONS SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                latest cartoons
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/cartoons/demon.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Demon Slayer: Mugen Train
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.2</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>117 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>14+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/cartoons/croods.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            The Croods: A New Age
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.2</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>95 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>6+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/cartoons/dragon.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Dragon Ball
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>4.9</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>11+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/cartoons/over-the-moon.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Over The Moon
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>6.3</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>100 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>14+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/cartoons/weathering.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Weathering With You
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>7.5</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>116 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>15+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/cartoons/your-name.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Your Name
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.2</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>112 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>13+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
                <!-- MOVIE ITEM -->
                <a href="#" class="movie-item">
                    <img src="./img/cartoons/coco.jpg" alt="">
                    <div class="movie-item-content">
                        <div class="movie-item-title">
                            Coco
                        </div>
                        <div class="movie-infos">
                            <div class="movie-info">
                                <i class="bx bxs-star"></i>
                                <span>8.4</span>
                            </div>
                            <div class="movie-info">
                                <i class="bx bxs-time"></i>
                                <span>109 mins</span>
                            </div>
                            <div class="movie-info">
                                <span>HD</span>
                            </div>
                            <div class="movie-info">
                                <span>7+</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->
            </div>
        </div>
    </div>
    <!-- END LATEST CARTOONS SECTION -->

    <!-- SPECIAL MOVIE SECTION -->
    <div class="section">
        <div class="hero-slide-item">
            <img src="./img/transformer-banner.jpg" alt="">
            <div class="overlay"></div>
            <div class="hero-slide-item-content">
                <div class="item-content-wraper">
                    <div class="item-content-title">
                        Vir Das' WANTE'D India Tour
                    </div>
                    <div class="movie-infos">
                        <div class="movie-info">
                            <i class="bx bxs-star"></i>
                            <span>10</span>
                        </div>
                        <div class="movie-info">
                            <i class="bx bxs-time"></i>
                            <span>180 mins</span>
                        </div>
                        <div class="movie-info">
                            <span>HD</span>
                        </div>
                        <div class="movie-info">
                            <span>13+</span>
                        </div>
                    </div>
                    <div class="item-content-description">
                        May - July 2022
                        <ul>
                            <li>Exciting Coupons</li>
                            <li>Free Food & Drinks</li>
                            <li>First Come First Serve Basis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPECIAL MOVIE SECTION -->

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="js/movies.js"></script>

</body>

</html>