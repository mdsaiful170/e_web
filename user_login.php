<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
}
;

if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if ($select_user->rowCount() > 0) {
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   } else {
      $message[] = 'incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

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

   <section class="form-container">

      <form action="" method="post" class="wow animate__fadeInDown">
         <h3>login now</h3>
         <input type="email" name="email" required placeholder="enter your email" maxlength="50" class="box"
            oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="password" name="pass" required placeholder="enter your password" maxlength="20" class="box"
            oninput="this.value = this.value.replace(/\s/g, '')">
         <input type="submit" value="login now" class="btn" name="submit">
         <p>don't have an account?</p>
         <a href="user_register.php" class="option-btn">register now</a>
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