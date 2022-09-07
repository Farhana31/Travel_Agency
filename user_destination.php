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
    
    
    
    <!-- destination section starts -->

    <section class="destination" id="destination">

        <div class="heading">
            <span>Our Destination</span>
            <h1>make yours destination</h1>

        </div>


        <div class="box-container">


       
       <!-- ////////// -->
        
        <?php
                    /* $host = 'localhost';
                    $user = 'root';
                    $password = '';
                    $db = 'travelproject';
                    $link = mysqli_connect($host, $user, $password, $db);
                    //$link = mysql($servername, $username, $password);

                    //mysql_select_db($db, $link);*/

                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $database = "travelproject";

                    $conn = mysqli_connect($server, $user, $pass, $database);







                    $sql="SELECT * FROM des";
                    $result = mysqli_query($conn, $sql) or die(mysql_error());
                    if(mysqli_num_rows($result)>0){
                        foreach($result as $row){
                            ?>



                                <div class="box" data-aos="fade-up" data-aos-delay="1300">
                                    <div class="image">
                                        <img src="<?= $row['images']?>" alt="">
                                    </div>
                                    <div class="content">
                                        <h3><?= $row['title']?></h3>
                                        <p><?= $row['description']?></p>
                                        <a href="#">read more <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>



                            <?php

                        }
                    }




                    /*

                    $host = 'localhost';
                    $user = 'root';
                    $password = '';
                    $db = 'travel';
                    $link = mysqli_connect($host, $user, $password, $db);
                    //$link = mysql($servername, $username, $password);

                    //mysql_select_db($db, $link);
                    $sql="SELECT * FROM destination";
                    $result = mysqli_query($link, $sql) or die(mysql_error());
                    if(mysqli_num_rows($result)>0){
                        foreach($result as $row){
                            ?>



                                <div class="box" data-aos="fade-up" data-aos-delay="1300">
                                    <div class="image">
                                        <img src="<?= $row['Picture']?>" alt="">
                                    </div>
                                    <div class="content">
                                        <h3><?= $row['Name']?></h3>
                                        <p><?= $row['Description']?></p>
                                        <a href="#">read more <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>



                            <?php

                        }
                    }*/











                    ?>
 <!-- ////////// -->





        </div>




    </section>



    <!-- destination section ends -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

    AOS.init({
        duration: 800,
        offset:150,
    });

</script>


</body>

</html