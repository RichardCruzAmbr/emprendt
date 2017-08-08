<?php
	// include Database connection file 
	include("conn.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Contenido</th>
							<th>Usuario Asignado</th>
                            <th>Fecha</th>
                            <th>Eliminar</th>
						</tr>';


            /*$consulta = "select * from admins where (admin_login='$usuario')";
			
			while ($res=$query->fetch_array()) {
				$nombre;
                $giro;
                $descripcion;
                $usuario;
				break;
            }*/
            $consulta = "select * from advices";
            if(!$resultado = $query = $con->query($consulta)){
                $data .= '<div class="alert bg-warning" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Vaya, ha ocurrido un error! <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
            }

    // Sí la consulta contiene datos, imprime lo siguiente
            if(mysqli_num_rows($resultado) > 0){
                $contador = 1;
                while($row = $query->fetch_array()){
                    $propietario = $row['advice_user'];
                    $consultarPropietario = "select * from users where (id_user='$propietario')";
                    $res = $que=$con->query($consultarPropietario);
                    while($fila = $que->fetch_array()){
                    $usuario = $fila['user_name'];                
                    $data .= '<tr>
				            <td>'.$contador.'</td>
				            <td>'.utf8_encode($row['advice_description']).'</td>
                            <td>'.utf8_encode($usuario).'</td>
                            <td>'.utf8_encode($row['advice_date']).'</td>
				            <td>
					           <button onclick="eliminarAviso('.$row['id_advice'].')" class="btn btn-danger">Eliminar</button>
				            </td>
    		                  </tr>';
    		        $contador++;
                    }
                }
            }
            else{
    	           // No encuentra datos en la tabla 
    	           $data .= '<div class="alert bg-info" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Sin avisos hasta el momento! <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>';
            }

    $data .= '</table>';

    echo $data;
?>