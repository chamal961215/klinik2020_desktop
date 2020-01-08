<?php
    
    session_start();

    $connection = mysqli_connect("localhost","root","","kdb");
    
    if(isset($_POST['search_users']))
    {
        $search = $_POST['search_this'];
        
        $linkToGo = 'location:http://localhost/KLINIK/admin/userProfiles.php?search='.$search;
        header($linkToGo);

    }



    mysqli_close($connection);
?>