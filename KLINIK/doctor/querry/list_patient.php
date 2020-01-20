<?php

if(!isset($_SESSION))
{
    session_start();
}
    $connection = mysqli_connect("localhost","root","","klinik final");
    
    $doc_id = $_SESSION['doctor_id'];

    $query = "SELECT UserId,Title,FirstName,MiddleName,LastName,ContactNo,NIC_number,Email FROM userprofile WHERE UserType = 'Patient' AND CreatedBy = '$doc_id' AND IsDeleted = '0' ";
    
    if(isset($_POST['search_by_id'])){
        
        $userid =  $_POST["userid_search"];
        
        $query = "SELECT UserId,Title,FirstName,MiddleName,LastName,ContactNo,NIC_number,Email 
                   FROM userprofile WHERE UserId = '$userid' AND CreatedBy = '$doc_id'";
    }
   elseif (isset($_POST['search_by_name'])){
        
        $name =  $_POST["name_search"];
        
        $query = "SELECT UserId,Title,FirstName,MiddleName,LastName,ContactNo,NIC_number,Email 
                  FROM userprofile WHERE FirstName LIKE '$name%'
                  OR MiddleName LIKE '$name%'
                  OR LastName LIKE '$name%' AND CreatedBy = '$doc_id'";
    }
    
    elseif (isset($_POST['search_by_nic_no'])){
        
        $nic_no =  $_POST["nic_no_search"];
        
        $query = "SELECT UserId,Title,FirstName,MiddleName,LastName,ContactNo,NIC_number,Email
                  FROM userprofile WHERE NIC_number LIKE '$nic_no%' AND CreatedBy = '$doc_id'";
    }
    elseif (isset($_POST['search_by_contact'])){
        
        $contact =  $_POST["contact_search"];
        
        $query = "SELECT UserId,Title,FirstName,MiddleName,LastName,ContactNo,NIC_number,Email
                  FROM userprofile WHERE ContactNo LIKE '$contact%' '";
    }

    $result_set = mysqli_query($connection,$query);

    if($result_set){

    	while ($record = mysqli_fetch_assoc($result_set)){
    	    $_SESSION['view_id'] = $record['UserId'];
    		$table .= '<tr>';
    //		$table .= '<td style="text-align:center;">'. $record['UserId'] . '</td>';
    		$table .= '<td style="text-align:center;">'. $record['Title'] . '</td>';
    		$table .= '<td style="text-align:center;">'. $record['FirstName'] .' '.$record['MiddleName'] .' '.$record['LastName']. '</td>';
    		$table .= '<td style="text-align:center;">'. $record['NIC_number'] . '</td>';
    //		$table .= '<td style="text-align:center;">'. $record['LastName'] . '</td>';
    		$table .= '<td style="text-align:center;">'. $record['ContactNo'] . '</td>';
    		$table .= '<td style="text-align:center;">'. $record['Email'] . '</td>';
    		$table .= '<td style="text-align:center;"><button type="button" name="view_profile_btn" class="btn btn-success" 
            onClick="document.location.href=\'viewpatient.php?id='. $record['UserId'].'\'"><i class="fas fa-eye" ></i> View </button> </td>';
    		$table .= '</tr>';
    	}
    	

    }

    mysqli_close($connection);