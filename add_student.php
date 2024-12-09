<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"udms");

$query = "insert into student values($_POST[id],
'$_POST[room_no]','$_POST[name]',
$_POST[mobile],'$_POST[email]','$_POST[password]')";

$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Student Added successfully.");
window.location.href = "admin_dashboard.php";
</script>