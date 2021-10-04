<?php
include("headeradmin.php");
$search = $con->conn->query("select * from searchlist order by id desc");
?>

<div class="container">
	<div class="row">
		<?php if($search->num_rows > 0){?>
<table class="table table-border">
	<tr>
		<th>
			Seacrch no.
		</th>
		<th>
			Search title
		</th>
		<th>
			Result
		</th>
	</tr>
			<?php
			$i = 0;
				while ($s = $search->fetch_assoc()) {
					$i++;
			?>
	<tr>
		<td>
			<?=$i?>
		</td>
		<td>
			<?=$s['name']?>
		</td>
		<td>
			<?php 
			if($s['status'] == 1)
				echo "Success";
			else
				echo "Fail";
			?>
		</td>
	</tr>
<?php
	}
}
else{	echo "No search history!!!";	}
?>
</table>
</div>
</div>
</body>
</html>