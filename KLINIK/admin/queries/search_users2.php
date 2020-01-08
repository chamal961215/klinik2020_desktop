<?php

		$connection = mysqli_connect("localhost","root","","kdb");

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = 1;
        }

        $num_per_page = 5;
        $start_from = ($page-1)*5;
		
		$search = $_GET['search'];

        $query = "SELECT id,title,name,email,enrollment_key,user_enroll_status FROM user WHERE is_deleted IS Null AND user_type!='Admin' AND (name LIKE '%{$search}%' OR email LIKE '%{$search}%') ORDER BY name LIMIT $start_from,$num_per_page";

        $result_set = mysqli_query($connection,$query);

        if(mysqli_num_rows($result_set))
        {
            while ($record = mysqli_fetch_assoc($result_set))
            {       

                $table .= '<tr>';
                $table .= '<td style="text-align:center;">'. $record['title'] . '</td>';
                $table .= '<td style="text-align:center;">'. $record['name'] . '</td>';
                $table .= '<td style="text-align:center;">'. $record['email'] . '</td>';
                $table .= '<td style="text-align:center;">'. $record['enrollment_key'] . '</td>';
                $table .= '<td style="text-align:center;">'. $record['user_enroll_status'] . '</td>';
                $table .= '<td style="text-align:center;"><form action="userViewProfile.php?id='.$record['id'].'" method="post"><button type="submit" name="view_profile_btn" class="btn btn-success"><i class="fas fa-eye"></i> View </button> </form> </td>';
                $table .= '<td style="text-align:center;"><button data-toggle="modal" data-target="#deleteModal'.$record['id'].'" type="submit" name="delete_user" class="btn btn-danger"><i class="fas fa-times"></i> Delete </button></td>
                    <div class="modal fade" id="deleteModal'.$record['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <a class="btn btn-danger" href="queries/delete_user.php?id='.$record['id'].'&page='.$page.'&search='.$search.'">Delete</a>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                    </div>';
                $table .= '</tr>';
            }
            	$table .= '</table>';
            	echo $table;     
        }
        else
        {
        		$record['blnk'] = '';
        		$record['note'] = 'No Results';

        		$table .= '<tr>';
                $table .= '<td colspan="7" style="text-align:center;">'. $record['note'] . '</td>';
                $table .= '</tr>';
                echo $table;
                $no_results = True; 
        }

?>