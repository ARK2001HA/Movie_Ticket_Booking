<?php
include('connection.php');
session_start();
$id= $_SESSION['movieid'];
$email= $_SESSION['email'];
$sql= "SELECT * FROM movie_new WHERE user_id='$id'";
$data= mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($data)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title> Regisration Form </title> 
</head>
<body>
    <div class="container">
        <header>Movie+</header>
        <form action="bookaction.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <label>Movie Name</label>
                            <input type="text" placeholder="Enter movie name" name="name" value="<?php echo $row['name'] ?>">
                        </div>

                        <div class="input-field">
                            <label>Select Cinema</label>
                           <select class="select1" id="selectbtn" name="location" required="">
                                <option disabled selected>Select</option>
                                <option>Cinepolis Acropolis Mall</option>
                                <option>Inox: City Center,Salt Lake</option>
                                <option>Inox: City Center2</option>
                                <option>Inox: Quest Mall</option>
                                <option>Cinepolis Lake Mall</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Select Date</label>
                            <input type="date" placeholder="Enter date" name="date" required>
                        </div>

                        <div class="input-field1">
                            <label>Time</label>
                           <select id="selectbtn" name="time">
                                <option>Select</option>
                                <option>9:00 am</option>
                                <option>11:30 am</option>
                                <option>2:00 pm</option>
                                <option>5:00pm</option>
                                <option>8:00pm</option>
                                <option>11:00pm</option>
                            </select>
                        </div>

                        <div class="input-field2">
                            <label>Format</label>
                            <br>
                            <input type="radio" name="format" value="2d">2D
                            &nbsp; &nbsp; &nbsp;
                            <input type="radio" name="format" value="3d">3D
                             &nbsp; &nbsp; &nbsp;
                            <input type="radio" name="format" value="3d Imax">IMAX 3D
                        </div>

                        <div class="input-field3">
                            <label>Language</label>
                            <br>
                            <input type="radio" name="language" value="hindi">Hindi
                            &nbsp;&nbsp;
                            <input type="radio" name="language" value="english">English
                            &nbsp;&nbsp;
                            <input type="radio" name="language" value="tamil">Tamil
                            &nbsp;&nbsp;
                            <input type="radio" name="language" value="kannada">Kannada
                            &nbsp;&nbsp;
                            <input type="radio" name="language" value="bengali">Bengali
                        </div>

                        <div class="input-field4">
                            <label>Seats</label>
                            <select id="selectbtn" name="seat">
                                <option>Select</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>

                         <div class="input-field5">
                            <label>Cost</label>
                            <ol>
                                <li>Executive(370.00)</li>
                                <li>Normal(350.00)</li>
                                <li>Premium(390.00)</li>
                            </ol>
                            <input type="radio" name="cost" value="370.00">370.00
                            &nbsp;&nbsp;
                            <input type="radio" name="cost" value="350.00">350.00
                            &nbsp;&nbsp;
                            <input type="radio" name="cost" value="390.00">390.00
                        </div>

                        <input type="hidden" name="user_email" id="user_email" value="<?= $email ?>">

                        <input type="submit" class="btn" name="submit" value="Book Now">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- <script src="js/booking.js"></script> -->
</body>
</html>