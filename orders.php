<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- animation css -->
   <link rel="stylesheet" href="css/animate.css">

   <!-- animation css -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

   <!-- siwper js -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- aos js link -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="orders">

      <h1 class="heading">placed orders</h1>

      <div class="box-container wow animate__zoomIn">

         <?php
         if ($user_id == '') {
            echo '<p class="empty">please login to see your orders</p>';
         } else {
            $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
            $select_orders->execute([$user_id]);
            if ($select_orders->rowCount() > 0) {
               while ($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                  ?>
                  <div class="box">
                     <p>placed on : <span>
                           <?= $fetch_orders['placed_on']; ?>
                        </span></p>
                     <p>name : <span>
                           <?= $fetch_orders['name']; ?>
                        </span></p>
                     <p>email : <span>
                           <?= $fetch_orders['email']; ?>
                        </span></p>
                     <p>number : <span>
                           <?= $fetch_orders['number']; ?>
                        </span></p>
                     <p>address : <span>
                           <?= $fetch_orders['address']; ?>
                        </span></p>
                     <p>payment method : <span>
                           <?= $fetch_orders['method']; ?>
                        </span></p>
                     <p>your orders : <span>
                           <?= $fetch_orders['total_products']; ?>
                        </span></p>
                     <p>total price : <span>$
                           <?= $fetch_orders['total_price']; ?>/-
                        </span></p>
                     <p> payment status : <span
                           style="color:<?php if ($fetch_orders['payment_status'] == 'pending') {
                              echo 'red';
                           } else {
                              echo 'green';
                           }
                           ; ?>">
                           <?= $fetch_orders['payment_status']; ?>
                        </span> </p>
                  </div>
                  <?php
               }
            } else {
               echo '<p class="empty">no orders placed yet!</p>';
            }
         }
         ?>

      </div>

   </section>



   <?php include 'components/footer.php'; ?>
   

   <!-- jquery js link -->
   <script src="js/jquery.js"></script>

   <!-- swiper js -->
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- aos js -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <!-- jquery letter js-->
   <script src="js/jquery.lettering.js"></script>

   <!-- jquery text js-->
   <script src="js/jquery.textillate.js"></script>

   <!-- wow  js-->
   <script src="js/wow.min.js"></script>


   <!-- script js -->
   <script src="js/script.js"></script>




   <script>

      AOS.init({
         offset: 150,
         duration: 1000,
      });
      new WOW().init({
         loop: true,
      });

      $(function () {
         $('.tlt').textillate({
            loop: true,
            minDisplayTime: 100,
         });
      });


   </script>

</body>

</html>