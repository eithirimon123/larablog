<?php define('BASEPATH', "localhost");
require_once("autoload.php");

$product_m = new ProductModel();


$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$conditions = array(
  "where"=>array("id"=>$id),
  "return_type"=>"single"
  );

$product = $product_m->getRows($conditions);

if(!$product){
  header("Location:index.php?delete=err");
  return;
}else{

	$product_m->delete(array("id"=>$id));
 
	header("Location:index.php?delete=ok");
	return;

}

//do you have permission to delete ? 





?>
