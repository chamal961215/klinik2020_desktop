<?php
include('includes/header.php');
include('includes/navbar.php');
?>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">User Profiles</h1>
      <!-- The form -->
        <form class="d-none d-sm-inline-block form-inline mr-4 ml-md-auto my-2 my-md-0 mw-100 navbar-search" action="queries/search_users.php" method="post">
            <div class="input-group">
              <input type="text" class="form-control border-0 small" style="width: 400px; background: #ffffff;" placeholder="Search Users..." aria-label="Search" aria-describedby="basic-addon2" name="search_this">
              <div class="input-group-append">
                <button class="btn btn-primary ml-1" type="submit" name="search_users">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
        </form>
    </div>

    <!-- Content Row -->
    <div class="row">
    <div class="card shadow mx-auto">
     <div class="card-body">
        <div>
    <?php
        $table = '<table class="table">';
        $table .= '<thead class="thead-light"><tr><th scope="col" class="col-px-5" style="width: 60px; text-align:center;">Title</th><th scope="col" class="px-5" style="width: 180px; text-align:center;">Full Name</th><th scope="col" class="px-5" style="width: 180px; text-align:center;">E-Mail</th><th scope="col" class="px-5" style="width: 210px; text-align:center;">Enrollment Key</th><th scope="col" class="px-5" style="width: 240px; text-align:center;">Enrollment Status</th><th scope="col" class="px-5" style="width: 60px; text-align:center;">View</th><th scope="col" class="px-5" style="width: 60px; text-align:center;">Deletes</th></tr></thead>';

        $no_results = False;

        if(isset($_GET['search']))
        {
          include('queries/search_users2.php');
        }
        else
        {
          include('queries/get_user_profile_list.php');
        }
    ?>
    </table>
    </div>
    <div class="row">
      <div class="col-9"></div>
      <div class="col-3 btn-group btn-group-toggle">
        <?php

          if(isset($_GET['search']))
          {

              $connection = mysqli_connect("localhost","root","","kdb");
              $queryTotal = "SELECT * FROM user WHERE is_deleted IS Null AND user_type!='Admin' AND (name LIKE '%{$search}%' OR email LIKE '%{$search}%')";
              $resultTotal = mysqli_query($connection,$queryTotal);
              $totalRecord = mysqli_num_rows($resultTotal);
              $totalPages = ceil($totalRecord/$num_per_page);
              $_SESSION['totalRecord'] = $totalRecord;

              //echo "<script>console.log('Debug Objects: " . $totalPages . "' );</script>";

              if ($totalRecord>5) 
              {
                if($page>1)
                {
                  echo "<a href='userProfiles.php?search=".$search."&page=".($page-1)."' class='btn btn-primary'><<</a>";
                }
                else
                {
                  echo "<a href=# class='btn btn-primary'><<</a>";
                }

                for($i=1;$i<$totalPages;$i++)
                {
                  if($page==$i)
                  {
                    echo "<a href='userProfiles.php?search=".$search."&page=".$i."' class='btn btn-primary active'>".$i."</a>";
                  }
                  else
                  {
                    echo "<a href='userProfiles.php?search=".$search."&page=".$i."' class='btn btn-primary'>".$i."</a>";
                  }
            
                }
                    echo "<a href='userProfiles.php?search=".$search."&page=".($i)."' class='btn btn-primary'>".($i)."</a>";

                if($i>$page)
                {
                  echo "<a href='userProfiles.php?search=".$search."&page=".($page+1)."' class='btn btn-primary'>>></a>";
                }
                else
                {
                  echo "<a href=# class='btn btn-primary'>>></a>";
                }  
              }

          }
          elseif($no_results==True) 
          {
            $no_results = False;
          }
          else
          {

              $connection = mysqli_connect("localhost","root","","kdb");
              $queryTotal = "SELECT * from user WHERE is_deleted IS Null AND user_type!='Admin'";
              $resultTotal = mysqli_query($connection,$queryTotal);
              $totalRecord = mysqli_num_rows($resultTotal);
              $totalPages = ceil($totalRecord/$num_per_page);

              if ($totalRecord>5) 
              {
                  if($page>1)
                {
                  echo "<a href='userProfiles.php?page=".($page-1)."' class='btn btn-primary'><<</a>";
                }
                else
                {
                  echo "<a href=# class='btn btn-primary'><<</a>";
                }

                for($i=1;$i<$totalPages;$i++)
                {
                  if($page==$i)
                  {
                    echo "<a href='userProfiles.php?page=".$i."' class='btn btn-primary active'>".$i."</a>";
                  }
                  else
                  {
                    echo "<a href='userProfiles.php?page=".$i."' class='btn btn-primary'>".$i."</a>";
                  }
            
                }
                    echo "<a href='userProfiles.php?page=".($i)."' class='btn btn-primary'>".($i)."</a>";

                if($i>$page)
                {
                  echo "<a href='userProfiles.php?page=".($page+1)."' class='btn btn-primary'>>></a>";
                }
                else
                {
                  echo "<a href=# class='btn btn-primary'>>></a>";
                }                
              }

          }

        ?>
      </div>
    </div>
    </div>
    </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>





