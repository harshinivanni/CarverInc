<?php
include("headeradmin.php");
if(isset($_POST['Approve'])){
	$id = $_POST['id'];
	$con->conn->query('update document set app_status = 1 where id = '.$id);
}
elseif(isset($_POST['Deny'])){
	$id = $_POST['id'];
	$con->conn->query('update document set app_status = 2 where id ='. $id);
}

$data = $con->conn->query("select * from document order by id desc");
?>
<div class="container">
	<table class="table table-border">
		<tr>
			<th>S. No.</th>
			<th>Title</th>
			<th>Approval Status</th>
			<th>View</th>
		</tr>
		<?php
		$i=0;
		if($data->num_rows > 0){
			while($d = $data->fetch_assoc()){
				$i++;
		?>
		<tr style="padding:3px; border: black thin; margin:3px; border-radius: 3px;">
			<form action="" method="POST">
			<td><?=$i?></td>
			<td>
				<input type="hidden" name="id" value="<?=$d['id']?>">
				<?=$d['title']?>
			</td>
			<td>
				<?php if($d["app_status"] == 0){?>
					Pending
				<?php }
					elseif($d["app_status"]==1){
				?>
				Approved
				<?php
					}
					else
				{?>
							Denied
				<?php }?>
			</td>
			</form>
			<td>
				<button onclick="location.href='documentadmin.php?id=<?=$d['id']?>'">view</button>
			</td>
		</tr>
		<?php
			}
		}
		else{	echo "No data available!!!";	}
		?>
	</table>
</div>
</body>
</html>
<?php
/*if($data->num_rows > 0){
	while($d = $data->fetch_assoc()){
		echo "<div class='alert alert-info'><a href='/documentadmin.php?id=".$d["id"]."'>".$d["title"]."</a></div>";
	}
}
else{
	echo "<span class='alert-warning'>No data found</span>";
}
*/
?>
