<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("conn.php");

    // get user id
    $id_advice = $_POST['id'];

    // delete User
    $query = "DELETE FROM advices WHERE id_advice = '$id_advice'";
    if(mysqli_query($con, $query)){
            echo "<script>alert('Registro Eliminado!');</script>";
        }else{
            echo "<script>alert('Error al eliminar!');</script>";
        }
}
?>