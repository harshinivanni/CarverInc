<?php
include("clientheader.php");
$data = $con->conn->query("select * from document order by id desc");
?>
<div class="container">
	<table class="table table-border">
		<tr>
			<th>S. No.</th>
			<th>Title</th>
			<th>View</th>
		</tr>
		<?php
		$i=0;
		if($data->num_rows > 0){
			while($d = $data->fetch_assoc()){
				if($d['app_status']==1){
				$i++;

		?>

		<tr style="padding:3px; border: black thin; margin:3px; border-radius: 3px;">
			<td><?=$i?></td>
			<td>
				<?=$d['title']?>
			</td>
			<td>
				<button onclick="location.href='documentclient.php?id=<?=$d['id']?>'">view</button>
			</td>
		</tr>
		<?php
	}
			}
		}
		else{	echo "No data available!!!";	}
		?>
	</table>
</div>
</body>
</html>
