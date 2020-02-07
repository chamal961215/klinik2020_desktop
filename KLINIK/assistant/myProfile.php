<?php
include('includes/header.php');
include('includes/navbar.php');

?>
       <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<?php include('includes/topnavbar.php');?>
     

            <div class="col-lg-12">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
                </div>
                <div class="card-body">
                  <?php
                if(isset($_GET['id']))
      {
        $id =$_GET['id'];  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
     
    $row = $result->fetch_assoc();

    $name = $row['name'];
    $email = $row['email'];
    $title = $row['title'];
    $nic = $row['nic'];
    $staff_id = $row['staff_id'];
    $address = $row['address'];
    $contact_no = $row['contact_no'];
    $last_login = $row['last_login'];
    $enrollment_key = $row['enrollment_key'];
    

    echo "<p><center><b><h3>".$title."</b>".' '."<b>". $name."</b></center></p></h3><br>";    
        $img='<img src="img/t1.jpg"  alt="user image" style="width: 200px; height: 200px;"><br>';
        echo "<center>".$img."</center>";

        
        echo "<b>Email: </b>" . $email . "<br>"; 
        echo "<b>NIC: </b>" . $nic . "<br>";  
        echo "<b>Address: </b>" . $address. "<br>";
        echo "<b>Contact No: </b>" . $contact_no. "<br>";
        echo "<b>Enrollment Key: </b>" . $enrollment_key. "<br>";
        echo "<b>Staff Id: </b>" . $staff_id . "<br>";
        echo "<b>Last Login:</b>" . $last_login. "<br>";
    
    }
} else {
    echo "0 results";
}
$conn->close();
?>


<a href="editassistantinfo.php?id='.$_SESSION['id'].'" type="submit" name ="edit" id="edit" class="btn btn-secondary btn-icon-split" >
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Edit Details</span>
                  </a>
                </div>
              </div>

            </div>
                </div>
              </div>

            </div>


	</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>