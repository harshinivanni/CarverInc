<?php
include("clientheader.php");
$id = $_GET["id"];

$data = $con->conn->query("select * from document where id = ".$id);
$tags = $con->conn->query("select * from tags where doc_id = ".$id);
if ($data->num_rows > 0) {
$row = $data->fetch_assoc() ;
$str = $row["details"];
}
    $stop_words = ["a","the","and","of","on","in","to","re","as","this","it","for","also","can","an","or","be","are","is","been","which","these","with","that","was","were","we","they"];
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
		echo"<span><br>";
		foreach($x as $y){
			if($y == $t[0]){
				echo "</span><span style='background-color:orange'> ".$y."</span><span>";
			}
			elseif($y == $t[1]){
				echo "</span><span style='background-color:blue'> ".$y."</span><span>";
			}
			elseif($y == $t[2]){
				echo "</span><span style='background-color:yellow'> ".$y."</span><span>";
			}
			elseif($y == $t[3]){
				echo "</span><span style='background-color:green'> ".$y."</span><span>";
			}
			elseif($y == $t[4]){
				echo "</span><span style='background-color:pink'> ".$y."</span><span>";
			}
			elseif($y == $t[5]){
				echo "</span><span style='background-color:gray'> ".$y."</span><span>";
			}
			elseif($y == $t[6]){
				echo "</span><span style='background-color:red'> ".$y."</span><span>";
			}
			elseif($y == $t[7]){
				echo "</span><span style='background-color:#FF4500'> ".$y."</span><span>";
			}
			elseif($y == $t[8]){
				echo "</span><span style='background-color:#FF8C00'> ".$y."</span><span>";
			}
			elseif($y == $t[9]){
				echo "</span><span style='background-color:#FFD700'> ".$y."</span><span>";
			}
			else{
				echo " ".$y;
			}
		}
		echo"</span>";
		echo"<br><br><br>";
		echo "Top 10 words:<br>";
		for ($xxx = 0; $xxx < 10; $xxx++){
			echo $t[$xxx]."<br>";
		}

		?>
		<br>
		<!--  -->
</div>
<?php }
}

?>
<br>
</div>
</body>
</html>

