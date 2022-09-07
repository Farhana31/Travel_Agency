<?php

include 'config.php';

session_start();




/*tourguides start */



if(isset($_POST['save_guide']))
{
    $placename = $_POST['placename'];
    $special = $_POST['special'];
    $description = $_POST['description'];




   
        $query = "INSERT INTO `tourplaces` (`placename`, `special`, `description`) VALUES ('$placename','$special','$description');";
        $query_run = mysqli_query($conn, $query);

        if($query)
        {
            move_uploaded_file($_FILES["des_image"]["tmp_name"], "upload/".$_FILES["des_image"]["name"]  );
            $_SESSION['success'] = "Tour place Added";
            header('location: tourplaces.php');
        }

        else
        {
            $_SESSION['status'] = "Tour place Not Added";
            header('Location: tourplaces.php');
        }
    



    

 }


/*tourguides end */



/*tourplaces start */



if(isset($_POST['save_tour']))
{
    $placename = $_POST['placename'];
    $special = $_POST['special'];
    $description = $_POST['description'];




   
        $query = "INSERT INTO `tourplaces` (`placename`, `special`, `description`) VALUES ('$placename','$special','$description');";
        $query_run = mysqli_query($conn, $query);

        if($query)
        {
            move_uploaded_file($_FILES["des_image"]["tmp_name"], "upload/".$_FILES["des_image"]["name"]  );
            $_SESSION['success'] = "Tour place Added";
            header('location: tourplaces.php');
        }

        else
        {
            $_SESSION['status'] = "Tour place Not Added";
            header('Location: tourplaces.php');
        }
    



    

 }


/*tourplaces end */

/*destination start */



if(isset($_POST['save_des']))
{
    $title = $_POST['des_title'];
    $subtitle = $_POST['des_subtitle'];
    $description = $_POST['des_description'];
    $images = $_FILES["des_image"]['name'];




   
        $query = "INSERT INTO `des` (`title`, `subtitle`, `description`, `images`) VALUES ('$title','$subtitle','$description','$images');";
        $query_run = mysqli_query($conn, $query);

        if($query)
        {
            move_uploaded_file($_FILES["des_image"]["tmp_name"], "upload/".$_FILES["des_image"]["name"]  );
            $_SESSION['success'] = "Destination Added";
            header('location: admin_destination.php');
        }

        else
        {
            $_SESSION['status'] = "Destination Not Added";
            header('Location: admin_destination.php');
        }
    



    

 }


/*destination end */


/*service start */



 if(isset($_POST['save_ser']))
{
    $name = $_POST['ser_name'];
    $icon = $_POST['ser_icon'];
    $description = $_POST['ser_description'];
    




   
        $query = "INSERT INTO `service` (`name`, `icon`, `description`) VALUES ('$name','$icon','$description');";
        $query_run = mysqli_query($conn, $query);

        if($query)
        {
            
            $_SESSION['success'] = "Service Added";
            header('location: admin_service.php');
        }

        else
        {
            $_SESSION['status'] = "Service Not Added";
            header('Location: admin_service.php');
        }
    





       
 }


/*service end */









if(isset($_POST['about_save']))
{
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];

    $query = "INSERT INTO aboutus (Title,Subtitle,Description) VALUES ('$title','$subtitle','$description')";
    $query_run = mysqli_query($conn, $query);

    if($query)
    {
        $_SESSION['success'] = "About us Added";
        header('location: aboutus.php');
    }

    else
    {
        $_SESSION['status'] = "Not Added";
        header('Location: aboutus.php');
    }
}

?>