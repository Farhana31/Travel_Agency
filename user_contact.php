<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!--Bootstrap 5 css Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/2c988112ad.js" crossorigin="anonymous"></script>

    <!--Custom css Link-->
    <link rel="stylesheet" href="user_contact.css" />

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Libre+Baskerville&family=Poppins&family=Raleway:ital,wght@0,500;1,200&family=Roboto+Mono&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>



<body>

    <div class="container">

        <div class="row">
            <div class="col-md-6 image-container">

                <div class="icon-contain my-3 py-5">
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Mada Center 8th Floor,379 Hudson<br>
                            St. New York, NY10018 US</p>
                        </div>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p><a href="tel:+18001236879">+1 800 1236879</a></p>
                        </div>
                    </div>
                    <div class="icon-holder">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p><a href="mailto:mailexample@email.com">mailexample@email.com</a></p>
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-md-6 form-container">
            <div class="message">
                Send Us a Message
            </div>

            <form  method="POST" enctype="multipart/form-data">
                <div class="field name-container">
                    <label for="first-name">Tell Us Your Name<span class="required-mark">*</span></label>
                    <div class="field-name">
                        <input type="text" id="first-name" name="firstname" value=""
                            class="form-control first-name" placeholder="First Name" required />
                        <input type="text" id="last-name" name="lastname" value=""
                            class="form-control last-name" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="field">
                    <label for="email">Enter Your Email<span class="required-mark">*</span></label>
                    <input type="text" id="email" name="email" value="" class="form-control"
                    pattern=".+@gmail.com" placeholder="Eg. example@gmail.com" required />
                </div>
                <div class="field">
                    <label for="phone">Phone Number<span class="required-mark">*</span></label>
                    <input type="tel" id="phone" name="phone" value="" class="form-control"
                        pattern=".{11}" placeholder="Eg. +18000 258400" required />
                </div>
                <div class="field">
                    <label for="textarea">Message<span class="required-mark">*</span></label>
                    <textarea id="textarea" rows="4" class="form-control textarea" name="message"
                        placeholder="Enter your message here..." required></textarea>
                </div>
                <div class="field">
                    <input type="submit" name="save_contact" class="button" value="Send Message" />
                </div>



                <?php
                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $database = "travelproject";

                    $conn = mysqli_connect($server, $user, $pass, $database);

                    if (!$conn) {
                        die("<script>alert('Connection Failed.')</script>");
                    }

                    if(isset($_POST["save_contact"]))
                    {
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $message = $_POST['message'];
                        
                    
                    
                    
                    
                    
                            $query = "INSERT INTO `contact` (`firstname`, `lastname`, `email`,`phone`, `message`) VALUES ('{$firstname}', '{$lastname}', '{$email}','{$phone}', '{$message}');";
                            $query_run = mysqli_query($conn, $query);

                            
                    
                        
                    }


            ?>


            </form>
        </div>
    </div>
   


    <!--Bootstrap 5 js Link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

   
</body>

</html>