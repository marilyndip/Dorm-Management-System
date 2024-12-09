<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"udms");

$query = "insert into admin values($_POST[id],
'$_POST[name]','$_POST[email]','$_POST[password]')";

$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Admin Added successfully.");
window.location.href = "admin_dashboard.php";
</script>