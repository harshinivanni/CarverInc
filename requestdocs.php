<?php
include("clientheader.php");
if(isset($_POST["title"])){
	echo $_POST['title']."<br>";
	echo $_POST['doc']."<br>";
	$con->conn->query("insert into document (`title`, `details`, `app_status`) values('".$_POST['title']."', '".$_POST['doc']."', 0)");
		echo "success";
}
?>
<br>
<div class="container">
<form action="" method="POST">
	<div> <input type="text" name="title" placeholder="Title"></div>
	<br>
	<div><textarea style="width: 100%" name="doc" placeholder="text content of the document"></textarea></div>
	<button type="submit">Submit for approval</button>
</form>
</div>
</body>
</html>