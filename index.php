<?php 

$conn = mysqli_connect('localhost','root','','mon_portfolio') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mon Site Web Complet de Portfolio Personnel Réactif</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="/library/fontas.js">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">


     <!-- custom css fichier link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>


<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message" data-aos="zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>


   <!-- commencer la section header -->
   <header class="header">

      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>

      <nav class="navbar">
         <a href="#home" class="active">accueil</a>
         <a href="#about">à propos</a>
         <a href="#services">services</a>
         <a href="#portfolio">portfolio</a>
         <a href="#contact">contact</a>
      </nav>

      <!-- Social-Medias-logos -->
      <div class="follow">
         <a href="https://www.facebook.com/munafmujifullah" class="fab fa-facebook-f" id="fab"></a>
         <a href="https://twitter.com/BillaMuji" class="fab fa-twitter"  id="fab"></a>
         <a href="https://www.instagram.com/mujipulla/" class="fa fa-instagram fa-5x"></a>
         <a href="https://www.linkedin.com/in/mujipulla-abdhulmunaf-021928105/?originalSubdomain=fr" class="fab fa-linkedin"  id="fab"></a>
         <a href="https://github.com/Mujipulla/" class="fab fa-github"></a>
      </div>
   </header> <!-- Fin de la section d'header -->


   <!-- Commencer la section home -->
   <section class="home" id="home" >
      <div class="image" data-aos="fade-right">
         <img src="images/accueils.jpg" alt="">
      </div>

      <div class="content_muji" data-aos="fade-up">
         <h3 data-aos="fade-up"> Bonjour! Je suis Mujipulla  </h3>
         <span>INTÉGRATEUR DÉVELOPPEUR WEB</span>
         
         <p  data-aos="fade-up"> passionné par la fourniture d'un service de haute qualité. Mon objectif est de fournir des solutions efficaces et innovantes pour mes clients, 
            en utilisant des outils et des technologies modernes. Je suis constamment en train d'apprendre et de  me développer pour améliorer mes compétences et mes connaissances.
         </p>
         <a href="about" class="btn" data-aos="fade-left">sur moi</a>
      </div>
   </section>

   <!-- Commencer la section à propo -->
   <section class="about" id="about">
      <h1 class="heading" data-aos="fade-down"> <span>Biographie</span></h1>

      <div class="biography">

         <p data-aos="fade-right">
         Développeur Full Stack avec 1 an d'expérience en développement web utilisant HTML, CSS, JavaScript, PHP, MySQL et Symfony. Motivé et déterminé à livrer des résultats exceptionnels et à améliorer continuellement mes compétences.
         À la recherche d'un rôle stimulant dans l'industrie IT.
         </p>

         <div class="bio">
            <h3 data-aos="zoom-in"><span>nom :</span> ABDHULMUNAF</h3>
            <h3 data-aos="zoom-in"><span>prénom :</span> Mujipulla</h3>
            <h3 data-aos="zoom-in"><span>email :</span> mujifullahmunaff@gmail.com</h3>
            <h3 data-aos="zoom-in"><span>adresse :</span> 72 rue , Victor Hug, 93500, PANTIN.</h3>
            <h3 data-aos="zoom-in"><span>phone :</span> 07 58 34 65 39</h3>
            <h3 data-aos="zoom-in"><span>expérience :</span> 1 an d'expérience</h3>
         </div>

         <a href="library/cv.pdf" class="btn" download>télécharger  CV</a>

      </div>

      <!-- <div class="skills" >

         <h1 class="heading"> <span>compétences</span> </h1>

         <div class="progress">
            <div class="bar"> <h3><span>HTML</span> <span>90%</span></h3> </div>
            <div class="bar"> <h3><span>CSS</span> <span>75%</span></h3> </div>
            <div class="bar"> <h3><span>JavaScript</span> <span>50%</span></h3> </div>
            <div class="bar"> <h3><span>PHP</span> <span>60%</span></h3> </div>
         </div>

      </div> -->

   </section> <!--Fin la section à propo -->


   <section class="services" id="services">
      <h1 class="heading service-heading" > <span>services</span> </h1>
   </section>


   <!-- Commencer la section services -->
   <section class="container services" id="services">
      <!-- <div class="service">
         <h1 class="heading service-heading" > <span>services</span> </h1>
      </div> -->
      
      <div class="slider">
      <div class="box1">
        <p id="slider-box">WEB DEVELOPMENT</p> 
      </div>
      <div class="box2">
         <p id="slider-box">WORDPRESS</p>
      </div>
      <div class="box3">
         <p id="slider-box">UI/UX DESIGN</p>
      </div>
      <div class="box4">
         <p id="slider-box">SYMFONY 6</p>
      </div>
      <div class="box5">
         <p id="slider-box">BOOTSRTAP 5</p>
      </div>
      </div>
   </section><!--Fin la section services -->


   <!-- Commencer la section Portfolio -->
   <section class="portfolio" id="portfolio">

      <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <img src="images/Haircut.png" alt="">
            <a href="https://mujipulla.github.io/haircut-muji/" target="_blank" id="project-title">Haircut</a>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/multishop.png" alt="">
            <a href="https://mujipulla.github.io/multishopown/"  target="_blank" id="project-title">multi-Shop</a>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/wf3.png" alt="">
            <a href="https://mujipulla.github.io/WordForce3/"   target="_blank" id="project-title">WordForce 3</a>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/Netflix.jpeg" alt="">
            <a href="#"  id="project-title">Netflix</a>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/travels.png" alt="">
            <a href="https://mujipulla.github.io/travels-muji/"  target="_blank"  id="project-title">travels</a>
         </div>

         <div class="box" data-aos="zoom-in">
            <img src="images/webild.png" alt="">
            <a href="http://localhost/webbild-first"  id="project-title">webild</a>
         </div>

      </div>

   </section> <!--Fin la section Portfolio -->


   <!-- contact section starts  -->
   <section class="contact" id="contact">

      <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

      <!-- Form -->
      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="Entrez votre nom" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="Entrer votre Email" class="box" required>
         </div>
         <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Entrez votre numéro de téléphone" class="box" required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="Entrez votre message" cols="30" rows="10"></textarea>
         <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
      </form>

      <!-- Box Contact -->
      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+33 075 83 465 39</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>mujifullahmunaff@gmail.com</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>72 rue victor hugo 93500</p>
         </div>

      </div>
   </section>
   <!-- contact section ends -->
 
    <!-- footer -->
   <div class="footer"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mujipulla</span> </div>


   


   <!-- custom js fichier link  -->
   <script src="js/scripts.js"></script>
   <script src="js/jquery.min.js"></script>
   <script src="js/script.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

   <script>

      AOS.init({
         duration:800,
         delay:300
      });

   </script>

</body>
</html>