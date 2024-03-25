<?php 
    include_once 'header.php';

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                                <form>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Mid Term Marks</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mid term marks ">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Mid term Review</label>
                                        <textarea name="bio" cols="120" rows="5" class="form-control"></textarea>
                                      </div>
                                    

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Final Exams Marks</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter final grade marks ">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Final Exam Review</label>
                                        <textarea name="bio" cols="120" rows="5" class="form-control"></textarea>
                                      </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
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