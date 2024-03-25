<?php 
    include_once 'config.php'; 
   
    $id = $_POST['id'];


    $sql = "UPDATE tbl_user SET is_active='".$_POST['val']."' WHERE id=".$id;

    $result = mysqli_query($link, $sql);


    if ($result) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($link);
?>

               
