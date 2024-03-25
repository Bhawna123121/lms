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
                                            <th>Email</th>
                                            <th>Course</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td>Ahemad Bhatt</td>
                                            <td>ahmed@gmail.com</td>
                                            <td>CAD</td>
                                            <td><a href="#" class="btn btn-primary">Edit</a> &nbsp; &nbsp; <a href="#" class="btn btn-danger">Suspend</a></td>
                                        </tr>
                                        <tr>
                                           <td>Ahemad Bhatt</td>
                                            <td>ahmed@gmail.com</td>
                                            <td>CAD</td>
                                            <td><a href="#" class="btn btn-primary">Edit</a> &nbsp; &nbsp; <a href="#" class="btn btn-danger">Suspend</a></td>
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