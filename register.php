<?php
       
          define('HOST','rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
      	define('USER','g1wbv4e6yvi6e710');
      	define('PASS','t2z30tum76qfgrzd');
		define('DB','n3ycfw3efefiynuy');
        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
      
       $sin_cubrir=$_GET['sin_cubrir12'];
$cubrir=$_GET['cubrir12'];
$fecha=$_GET['fecha_cob12'];
$porcentaje24=$_GET['porcentaje12'];
$id_servicio=$_GET['id_servicio'];

		if($cubrir == '' || $sin_cubrir== '' || $fecha == '' || $porcentaje24== '' || $id_servicio == '')
		{
	
		echo 'please fill all values';
		}
		else{
		$sql = "INSERT INTO cubertura12 (cubrir12,sin_cubrir12,fecha_cob12,porcentaje12,id_servicio) VALUES('$cubrir','$sin_cubrir','$fecha','$porcentaje12','$id_servici')";
		if(mysqli_query($con,$sql)){
			echo 'successfully registered';
	
	}
		else{
				
			echo 'oops! Please try again!';
		
		}

			
	        mysqli_close($con);
		}	

?>