<?php 
    include_once 'header.php';
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
                                            <th>Course Name</th>
                                            <th>Course Name</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>SL0098</td>
                                            <td>System Architect</td>
                                            <td><a href="#" class="btn btn-primary">Edit</a> &nbsp; &nbsp; <a href="#" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>SL0067</td>
                                            <td>Accommodation and Human Rights Management</td>
                                            <td><a href="#" class="btn btn-primary">Edit</a> &nbsp; &nbsp; <a href="#" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>CS8656</td>
                                            <td>Administrative Business Management</td>
                                           <td><a href="#" class="btn btn-primary">Edit</a> &nbsp; &nbsp; <a href="#" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Agri-Business Management</td>
                                            <td><a href="#" class="btn btn-primary">Edit</a> &nbsp; &nbsp; <a href="#" class="btn btn-danger">Delete</a></td>
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