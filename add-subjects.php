<?php 
    include_once 'header.php';
    include_once 'config.php'; 
    $selectSQL = 'SELECT * FROM `tbl_course`';
    $result = mysqli_query($link, $selectSQL);

    if(isset($_POST['submit'])){



         $ins_query = "INSERT INTO `tbl_subject` (`course_id`, `subject_name`, `subject_code`) VALUES ('".$_POST['course_id']."', '".$_POST['subject_name']."', '".$_POST['subject_code']."')";

         mysqli_query($link,$ins_query) or die(mysql_error());

         echo '<script type="text/javascript">alert("Data added successfully")</script>';
    }

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Subject</h6>
                        </div>
                        <div class="card-body">
                            <form name="form" method="post" action="" class="form-group ml-3" >
  <div class="form-group">
    <label for="exampleInputEmail1">Subject Name</label>
    <input type="text" name="subject_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter subject name">
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Course Name</label>
    <select name="course_id" id="cars" class="form-control">
 

  <?php
      if( mysqli_num_rows( $result )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $result ) ){



            ?>
  <option value="<?= $row['id'] ?>"><?= $row['course_name'] ?></option>
  <?php
        
        }
      }
    ?>

</select>
  </div>



  <div class="form-group">
    <label for="exampleInputPassword1">Subject Code</label>
    <input name="subject_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter course code">
  </div>
   <input name="submit" type="submit" value="Submit" class="btn btn-primary"/>
</form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 

    include_once 'footer.php';
  ?> 
