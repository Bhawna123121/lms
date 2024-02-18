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
                                            <th>Subject</th>
                                            <th>Course</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UI Development </td>
                                            <td>Software Quality Assurance</td>
                                            <td><a href="view-class-lists.php" class="btn btn-primary">View Class List</a></td>
                                        </tr>
                                        <tr>
                                            <td>Web Technologies</td>
                                            <td>Computer Application Development</td>
                                            <td><a href="view-class-lists.php" class="btn btn-primary">View Class List</a></td>
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