<?php

$server ="localhost";
$user = "root";
$password = "";
$db = "signup";

$con = mysqli_connect($server,$user,$password,$db);
if($con){
			?>
			
			<script>
				alert(" you are successful");
			</script>
		<?php
		}else{
			
		?>
			<script>
				alert("no connect");
			</script>
			<?php
		}
?>