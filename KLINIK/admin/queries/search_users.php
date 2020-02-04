<?php
    
    session_start();
    $root = dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/klinik_git/klinik2020_desktop/';
    require $root . 'host_address.php';

    $connection = mysqli_connect("localhost","root","","kdb");
    
    if(isset($_POST['search_users']))
    {
        $search = $_POST['search_this'];
        
        $linkToGo = 'location:'.$host_address.'KLINIK/admin/userProfiles.php?search='.$search;
        header($linkToGo);

    }



    mysqli_close($connection);
?>