<?php
include('includes/header.php');
include('includes/navbar.php');
?>
            

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
    $user_type = $row['user_type'];
    $contact_no = $row['contact_no'];
    $last_login = $row['last_login'];

    echo "<p><center><b><h3>".$title."</b>".' '."<b>". $name."</b></center></p></h3><br>";    
        $img='<img src="img/img1.jpg"  alt="user image" style="width: 200px; height: 200px;"><br>';
        echo "<center>".$img."</center>";

        
        echo "<b>Email: </b>" . $email . "<br>"; 
        echo "<b>NIC: </b>" . $nic . "<br>";  
        echo "<b>Address: </b>" . $address. "<br>";
        echo "<b>Contact No: </b>" . $contact_no. "<br>";
        echo "<b>Last Login:</b>" . $last_login. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
                </div>
              </div>

            </div>


	</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>