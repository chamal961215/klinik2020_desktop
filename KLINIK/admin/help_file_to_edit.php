name,email,password,title,nic,staff_id,address,user_type,contact_no,enrollment_key,user_enroll_status,slmc_no,is_deleted,last_login


name,email,password,title,nic,address,user_type,contact_no,enrollment_key,user_enroll_status,slmc_no,is_deleted,last_login


   $query = "INSERT INTO user (name,email,password,title,nic,address,user_type,contact_no,enrollment_key,user_enroll_status,slmc_no) VALUES ('{$name}' , '{$email}' , '{$address}')";

		<?php
          if(isset($_GET['asst_fail']) OR isset($_GET['asst'])) 
          {
            $content = '<div class="tab-pane fade show active border border-top-1" id="nav-addAssistant" role="tabpanel" aria-labelledby="nav-addAssistant-tab" style="  background-color: #ffffff; padding: 25px; padding-top: 5px; padding-bottom: 20px; z-index: 0;">';
          }
          else
          {
            $content = '<div class="tab-pane fade border border-top-1" id="nav-addDoctor" role="tabpanel" aria-labelledby="nav-addDoctor-tab" style="  background-color: #ffffff; padding: 25px; padding-top: 5px; padding-bottom: 20px; z-index: 0;">';
          }
            echo $content;

        ?>

        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

           $table .= '<td style="text-align:center;"><button data-toggle="modal" data-target="#deleteModal" type="submit" name="delete_user" class="btn btn-danger"><i class="fas fa-times"></i> Delete </button></td>
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure.?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="yes">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">This user will be deleted permanently from the system.</div>
                            <div class="modal-footer">
                                <a class="btn btn-danger" href="queries/delete_user.php?id='.$record['id'].'&page='.$page.'">Delete</a>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                    </div>';


"'localhost/KLINIK/admin/userViewProfile.php?id='.$record['id']'"'

action="queries/delete_user.php?id='.$record['id'].'" method="post"

echo "<script>console.log('Debug Objects:" . $totalPages . "' );</script>";

mail : klinik.ruhuna@gmail.com

password :#RUhunaKlinik