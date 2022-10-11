<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <!--  cdn font link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!--  css file link  -->
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

    <!-- header section starts  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="follow">
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image" data-aos="fade-right">
            <img src="images/taiwan-no1.gif" alt="">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">Hello, I am Julian Cooper</h3>
            <span data-aos="fade-up">Student & Engineer</span>
            <p data-aos="fade-up">20 years old</p>
            <a data-aos="fade-up" href="#about" class="btn">About me</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"> <span>Biography</span> </h1>

        <div class="biography">

            <p data-aos="fade-up"></p>

            <div class="bio">
                <h3 data-aos="zoom-in"> <span>name : </span> Julian Cooper </h3>
                <h3 data-aos="zoom-in"> <span>email : </span> JulianJcooper2002@gmail.com </h3>
                <h3 data-aos="zoom-in"> <span>address : </span> Gouda, Netherlands</h3>
                <h3 data-aos="zoom-in"> <span>phone : </span> </h3>
                <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
                <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
            </div>

            <a href="#" class="btn" data-aos="fade-up">Contact Form</a>

        </div>

        <div class="skills" data-aos="fade-up">

            <h1 class="heading"> <span>skills</span> </h1>

            <div class="progress">
                <div class="bar" data-aos="fade-left">
                    <h3><span>HTML</span> <span>Beginner</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>CSS</span> <span>Beginner</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>JavaScript</span> <span>Beginner</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>PHP</span> <span>Beginner</span></h3>
                </div>
            </div>

        </div>

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

            <div class="row">

                <div class="box-container">

                    <h3 class="title" data-aos="fade-right">education</h3>

                    <div class="box" data-aos="fade-right">
                        <span>( 2018 - 2022 )</span>
                        <h3>Student Engineer</h3>
                        <p>I studied technical engineering for 4</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>( 2022 - 2026 )</span>
                        <h3>Student ICT</h3>
                        <p>Ik studeer nu ICT aan de hoge school Utrecht.</p>
                    </div>

                </div>

                <div class="box-container">

                    <h3 class="title" data-aos="fade-left">experience</h3>

                    <div class="box" data-aos="fade-left">
                        <span>( 2019 - 2022 )</span>
                        <h3>Climate Engineer</h3>
                        <p>I have studied for climate engineering at a company for 2 years.</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class=""></i>
                <h3>Repair services</h3>
                <p>I can repair devices like laptops, desktop computers and some phones/tablets.</p>
            </div>

        </div>

    </section>

    <!-- services eind-->

    <!-- portfolio start-->

    <section class="portfolio" id="portfolio">

        <h1 class="heading" data-aos="fade-up"> <span>Portfolio</span> </h1>

        <div class="box-container">


            <div class="box" data-aos="zoom-in">
                <img width="100" height="100" src="images/img-6.jpg" alt="">
                <h3>Realised a 20 room fully controlled&managed climate lab for a large company specialising in
                    seed&plant research.</h3>
                <span>( 2021 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img width="100" height="100" src="images/" alt="">
                <h3>Made a portfolio website </h3>
                <span>( 2022 )</span>
            </div>
        </div>

    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>



        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>---</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>julian.cooper@student.hu.nl</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Location</h3>
                <p> Gouda, Netherlands</p>
            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Julian Cooper</span> </div>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- aos js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        delay: 300
    });
    </script>

</body>

</html>