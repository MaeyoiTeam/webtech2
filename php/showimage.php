<?php
include('config.php');

if(isset($_GET['id'])){
$query = mysql_query("SELECT * FROM homework WHERE ID='".$id."'");
while($row = mysql_fetch_assoc($query)){
 $imageData  = $row["file"];
}
header("content-type :image/jpg");

echo $imageData;

}
else{
echo "error!";
}

?>