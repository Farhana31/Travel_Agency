
<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "travelproject";

    $conn = mysqli_connect($server, $user, $pass, $database);
    $name="";

    if(isset($_GET["id"]))
    {
        $sth = $_GET["id"];
        
            $query1 = "DELETE FROM `service` WHERE id='$sth';";
            $query_run1 = mysqli_query($conn, $query1);

            
            header('location:admin_service.php');

    
            
        }

?>