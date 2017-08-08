<?php
	/*if(isset($_POST['id_idea']) && isset($_POST['idea_name']) && isset($_POST['idea_topic']) && isset($_POST['idea_description']) && isset($_POST['idea_user']))
	{*/
		
		include("conn.php");

	
		$advice = $_POST['advice'];
        $user = $_POST['user'];
        $date = date('d-m-Y');
        $admin = 1;
        
        $insertar = "INSERT INTO advices VALUES('".null."','$advice','$date','$user','$admin')";

        if(mysqli_query($con, $insertar)){
            echo "1 Registro Agregado";
        }else{
            echo "<script>alert('Error');</script>";
        }
	/*}*/
?>