<?php 
    include_once 'header.php';
    include_once 'config.php'; 
    $selectSQL = 'SELECT * FROM `tbl_subject`';
  
    # Execute the SELECT Query
    $result = mysqli_query($link, $selectSQL);
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                 
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Courses</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Course Id</th>
                                            <th>Subject Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        

                                     <?php
      if( mysqli_num_rows( $result )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $result ) ){

            ?>


                                        <tr>
                                            <td><?= $row['course_id'] ?></td>
                                            <td><?= $row['subject_name'] ?></td>
                                             <td><a href="#" class="btn btn-primary">Edit</a> &nbsp; &nbsp; <a href="#" class="btn btn-danger">Delete</a></td>
                                        </tr>

            <?php
        
        }
      }
    ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 
    include_once 'footer.php';
?> 

<script>
$('#myTable').DataTable( {
     dom: 'Bfrtip',
    buttons: [
        'colvis',
        'excel',
        'print',
        'pdf'
    ]
} );
</script>