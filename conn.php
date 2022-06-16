<?php
include 'toastrlink.php';
$serve = "localhost";
$username = "root";
$password = "";
$dbname = "core_project";

$conn = mysqli_connect($serve,$username,$password,$dbname);

if($conn)
{
	?>
	<script type='text/javascript'>
   toastr.success('connection Successfully');
	</script>
	<?php
}else
{
	?>
	<script type='text/javascript'>
   toastr.info('not connection Successfully');
	</script>
	<?php
}


?>