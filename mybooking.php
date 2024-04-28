<?php
include("connection.php");
session_start();
$email= $_SESSION['email_check'];
$sql= "SELECT * FROM `movie_booking` WHERE email='$email'";
$data= mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/mybooking.css">
    <title>My Bookings</title>
</head>
<body class="bg-light">
    <a href="duplicatehome.php" class="a1"><h6>HomePage</h6></a>
    <?php
        foreach ($data as $value) {
    ?>                                        
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto">

                <div class="row mt-5 gx-3">

                    <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
                        <div class="card p-4">
                            
                            <h2 class="py-4 font-weight-bold">My Bookings</h2>

                                <div class="row">

                                    <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">

                                        <img src="img/qr.png" class="img-fluid" alt="cart img">
                                    </div>

                                    <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                         <div class="row">
                                            
                                            <div class="col-6 card-title">
                                                <h1 class="mb-4 product_name"><?php echo $value['name'] ?></h1>
                                                <p class="mb-2"><strong>Cinema: </strong><?php echo $value['location'] ?></p>
                                                <p class="mb-2"><strong>Date: </strong><?php echo $value['date'] ?></p>
                                                <p class="mb-3"></p><strong>Time: </strong><?php echo $value['time'] ?></p>
                                                <p class="mb-3"></p><strong>Format: </strong><?php echo $value['format'] ?></p>
                                                <p class="mb-3"></p><strong>Language: </strong><?php echo $value['language'] ?></p>
                                                <p class="mb-3"></p><strong>Seat: </strong><?php echo $value['seat'] ?></p>
                                                <p class="mb-3"></p><strong>Cost: </strong><?= $row['cost']*$row['seat'] ?></p>
                                            </div>
                                          
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
          
    </div>
<?php
    }
?>
<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script type="text/javascript">

    var product_total_amt = document.getElementById('product_total_amt');
    var shipping_charge = document.getElementById('shipping_charge');
    var total_cart_amt = document.getElementById('total_cart_amt');
    var discountCode = document.getElementById('discount_code1');
    const decreaseNumber = (incdec, itemprice) => {
    var itemval = document.getElementById(incdec);
    var itemprice = document.getElementById(itemprice);
    console.log( itemprice.innerHTML);
    // console.log(itemval.value);
    if(itemval.value <= 0){
    itemval.value = 0;
    alert('Negative quantity not allowed');
    }else{
    itemval.value = parseInt(itemval.value) - 1;
    itemval.style.background = '#fff';
    itemval.style.color = '#000';
    itemprice.innerHTML  = parseInt(itemprice.innerHTML) - 15;
    product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) - 15;
    total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
    }
    }
    const increaseNumber = (incdec, itemprice) => {
    var itemval = document.getElementById(incdec);
    var itemprice = document.getElementById(itemprice);
    // console.log(itemval.value);
    if(itemval.value >= 5){
    itemval.value = 5;
    alert('max 5 allowed');
    itemval.style.background = 'red';
    itemval.style.color = '#fff';
    }else{
    itemval.value = parseInt(itemval.value) + 1;
    itemprice.innerHTML  = parseInt(itemprice.innerHTML ) + 15;
    product_total_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + 15;
    total_cart_amt.innerHTML  = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
    }
    }
    const  discount_code = () => {
    let totalamtcurr = parseInt(total_cart_amt.innerHTML);
    let error_trw = document.getElementById('error_trw');
    if(discountCode.value === 'thapa'){
    let newtotalamt = totalamtcurr - 15;
    total_cart_amt.innerHTML = newtotalamt;
    error_trw.innerHTML = "Hurray! code is valid";
    }else{
    error_trw.innerHTML = "Try Again! Valid code is thapa";
    }
    }
    </script>
   
  </body>
</html>