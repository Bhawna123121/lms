<?php 

    include_once 'header.php';
    include_once 'config.php'; 

    if(isset($_POST['submit'])){

         $ins_query = "INSERT INTO `tbl_course` (`course_code`, `course_name`) VALUES ('".$_POST['course_code']."', '".$_POST['course_name']."')";

         mysqli_query($link,$ins_query) or die(mysql_error());

         echo '<script type="text/javascript">alert("Data added successfully")</script>';
    }


?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                  
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add Course</h6>
                        </div>
                        <div class="card-body">
                            <form name="form" method="post" action="" class="form-group ml-3" >
  <div class="form-group">
    <label for="exampleInputEmail1">Course Code</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="course_code" aria-describedby="emailHelp" placeholder="Enter course name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Course Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="course_name" aria-describedby="emailHelp" placeholder="Enter course code">
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
