<?php
include("headeradmin.php");
$id = $_GET["id"];
if(isset($_POST['Approve'])){
	$con->conn->query('update document set app_status = 1 where id = '.$id);
	for($temp = 0; $temp < 10; $temp++){
		$con->conn->query('insert into tags(tagname, doc_id) values(""	,'.$id.')');
	}
}
elseif(isset($_POST['Deny'])){
	$con->conn->query('update document set app_status = 2 where id ='. $id);
}

elseif(isset($_POST['tag'])){
	$tagid = $con->conn->query("select * from tags where doc_id=".$id);
	$temp=0;
	while($t = $tagid->fetch_assoc()){
		if($_POST['tag'.$temp]!=""){
			$con->conn->query("update tags set tagname = '".$_POST['tag'.$temp]."' where id = ".$t['id']);
		}
		$temp++;
	}
	echo"<br>";
}

$data = $con->conn->query("select * from document where id = ".$id);
$tags = $con->conn->query("select * from tags where doc_id = ".$id);
if ($data->num_rows > 0) {
$row = $data->fetch_assoc() ;
$str = $row["details"];
echo $str;
}
    $stop_words = ["a","the","and","of","on","in","to","re","as","this","it","for","also","can","an","or","be","are","is","been","which","these"];
    $string = strtolower($str); // Make string lowercase

    $words = str_word_count($string, 1); // Returns an array containing all the words found inside the string
    $words = array_diff($words, $stop_words); // Remove black-list words from the array
    $words = array_count_values($words); // Count the number of occurrence

    arsort($words); // Sort based on count
    $b = array_slice($words, 0, 10);
    $a =  implode($b);
	//echo "$a";
	//print_r ($b);
$i = 0;
foreach($b as $x => $x_value) {
    $t[$i] = $x;
	$i = $i + 1;
}
$data = $con->conn->query("select * from document where id = ".$id);


?>
<div class="container">
	<?php if($data->num_rows == 1){
		while($d = $data->fetch_assoc()){
			?>
	<div class="h2">
		<?=$d["title"]?>
	</div>
	<div>
	<span>
	</span>
	</div>
<br>
<div>
		<?php
		$x = $d["details"];
		$x = explode(" ",$d["details"]);
		echo"<span>";
		
		echo"</span>";
		echo"<br>";
		echo"<br><button type='sublit' name='tag'>Update</button> </form>";


		?>
		<br>
		<!--  -->
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?=$d['id']?>">
		<?php if($d["app_status"] == 0){?>
			<button class="success" type="submit" name="Approve">Approve</button>
			<button class="warning" type="submit" name="Deny">Deny</button>
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
	</form>	
</div>
<?php }
}

?>
<br>
</div>
</body>
</html>

