<?php 
    include_once 'header.php';

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Course</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ahemad Bhatt</td>
                                            <td>Computer Application Development</td>
                                            <td><a href="edit-marks.php" class="btn btn-primary">Edit Marks</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Tejaswani</td>
                                            <td>Computer Application Development</td>
                                            <td><a href="edit-marks.php" class="btn btn-primary">Edit Marks</a></td>
                                        </tr>
                                       <tr>
                                            <td>Bhawna Malhotra</td>
                                            <td>Software Quality assurance</td>
                                            <td><a href="edit-marks.php" class="btn btn-primary">Edit Marks</a></td>
                                        </tr>
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