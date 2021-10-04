<?php
include('clientheader.php');
if(isset($_POST['search'])){
    $data = $_POST['search'];
    //echo "$data";
    $data = explode(" ",$data);
    $d1=array();
    $id = 0;
	$flag = 0;	
    while ($id < 18)
    {
        $count  = 0;
        foreach($data as $d){
			if ($d == "")
			{
				break;
			}
            $res = $con->conn->query("select * from document where id = ".$id);
            $r = $res->fetch_assoc();
            $str = $r["details"];
            $string = strtolower($str);
            //echo " ";
            //echo substr_count($string, $d);
            $count = $count + substr_count($string, $d);
		    if($count > 0){
			$flag = 1;
            }
		}
        
        
        $d1[$id] = $count;
        arsort($d1);
        $id = $id + 1;
    }
		$data1 = implode("",$data);
		if($flag == 1){
			$con->conn->query("insert into searchlist (`name`, `status`) values('".$data1."',". 1 .")");
		}
		else{
			$con->conn->query("insert into searchlist (`name`, `status`) values('".$data1."', ". 0 .")");
		}
   // print_r ($d1);
    if(count($d1) > 0){
        ?>
	<table class="table table-border">
		<tr>
			<th>S. No.</th>
			<th>Title</th>
			<th>View</th>
		</tr>
		<?php
		$i = 0;
		foreach($d1 as $x => $x_value) {
			$i++;
			if($x_value == 0)
			{
				break;
			}
			if($i == 6)
			{
				break;
			}
			//echo "$x ";
				$d2 = $con->conn->query("select * from document where id = ".$x);
			//	echo "number of rows: ".$d2->num_rows;;
				while($d3 = $d2->fetch_assoc())
				{

		?>

		<tr style="padding:3px; border: black thin; margin:3px; border-radius: 3px;">
			<td><?=$x?></td>
			<td>
				<?=$d3['title']?>
			</td>
			<td>
				<button onclick="location.href='documentclient.php?id=<?=$d3['id']?>'">view</button>
			</td>
		</tr>
	<?php 
				}
				} 
	
	?>
</table>
<?php	}
	else{
		echo"Sorry nothing found";
	}
}
?>
