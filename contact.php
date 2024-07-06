<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
}
;

if (isset($_POST['send'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_message->execute([$name, $email, $number, $msg]);

   if ($select_message->rowCount() > 0) {
      $message[] = 'already sent message!';
   } else {

      $insert_message = $conn->prepare("INSERT INTO `messages`(user_id, name, email, number, message) VALUES(?,?,?,?,?)");
      $insert_message->execute([$user_id, $name, $email, $number, $msg]);

      $message[] = 'sent message successfully!';

   }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

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

   <section class="contact">

      <form action="" method="post" class="wow animate__zoomIn">
         <h3>get in touch</h3>
         <input type="text" name="name" placeholder="enter your name" required maxlength="20" class="box">
         <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
         <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required
            onkeypress="if(this.value.length == 10) return false;" class="box">
         <textarea name="msg" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>

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