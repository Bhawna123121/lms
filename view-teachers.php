<?php 
    include_once 'header.php';
    include_once 'config.php'; 
    $selectSQL = 'SELECT * FROM `tbl_user` WHERE role = "2" ';
    
    $result = mysqli_query($link, $selectSQL);

?>
      <div class="container-fluid">

                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable"  width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Actions</th>
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
                                           <td><?= $row['name'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['country'] ?></td>
                                            <td><a href="#" class="btn btn-primary">Edit</a> &nbsp; &nbsp;

<?php 

if($row['is_active'] != 1){

?>

<BUTTON class="btn btn-danger"  onclick="suspend(<?= $row['id'] ?> , '1') ">Suspend</Button>

<?php 

}else{
    ?>
<a href="#" class="btn btn-danger" onclick="suspend(<?= $row['id'] ?>, '0')">Un Suspend</a>
    <?php 
}
 ?>

                                             


                                         </td>
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

function suspend(id , value){
     $.ajax({
        type: "POST",
        url: "suspend.php",   
        data: {"id":id , "val":value},
        dataType: 'json',
        success: function(dataResult){
            location.reload();
        }                        
    });
}


$('#myTable').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'colvis',
        'excel',
        'print',
        'pdf'
    ]
});
</script>