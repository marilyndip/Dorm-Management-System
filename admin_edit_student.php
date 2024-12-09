<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"udms");

	$query = "update student set room_no='$_POST[room_no]',name='$_POST[name]',
    mobile=$_POST[mobile],email='$_POST[email]',
    password='$_POST[password]' where id = $_POST[id]";

	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admin_dashboard.php";
</script>
