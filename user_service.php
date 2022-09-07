<!DOCTYPE html>
<html lang="en">
<head>
    <meta charser="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1.0">
    <title>Easy Travel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    
    <link rel="stylesheet" href="style_des.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!--swipper link-->
    <linkrel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="http://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="http://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="script.js" defer></script>
</head>
   
<body>
    
    
    

    <!-- services section starts  -->

    <section class="services" id="services">

        <div class="heading">
            <span>our services</span>
            <h1>countless expericences</h1>
        </div>

        <div class="box-container">


       
        <?php
                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $database = "travelproject";

                    $conn = mysqli_connect($server, $user, $pass, $database);


                    $sql="SELECT * FROM service";
                    $result = mysqli_query($conn, $sql) or die(mysql_error());
                    if(mysqli_num_rows($result)>0){
                        foreach($result as $row){
                            ?>



                                <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                                    <i class="<?= $row['icon']?>"></i>
                                    <h3><?= $row['name']?></h3>
                                    <p><?= $row['description']?>.</p>
                                    
                                </div>



                            <?php

                        }
                    }
                    ?>
 <!-- ////////// -->

          

 </div>

</section>

<!-- services section ends -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>


</body>

</html>