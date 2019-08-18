<?Php
@$cat_id=$_GET['cat_id'];
//@$cat_id="2,3"; // For testing this page only. 
///////////// checking for injection attack //////
$mn=split(",",$cat_id); // creating array 
while (list ($key, $val) = each ($mn)) { 
//echo "$key -> $val <br>"; // display elements if you want
if(!is_numeric($val)){  // checking each element 
echo "Data Error ";
exit;
}
}
/////////// end of checking for injection attack // 

require "config.php";
$sql="select subcategory,subcat_id from subcategory where cat_id IN ($cat_id)";

$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$main = array('data'=>$result);
echo json_encode($main);
?>
