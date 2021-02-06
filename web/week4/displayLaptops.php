


<?php 
//laptops controller
require_once 'laptop-model.php';
require_once 'dbConnect.php';

$db = get_db();

$query = 'SELECT * FROM laptops';
$stmt = $db->prepare($query);
$stmt->execute();
$laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
 <p>Hello Laptops</p>
<?php //if (isset($laptopDisplay)) {
		//echo $laptopDisplay;}


		echo $laptops[0]['laptopmodel'];


	 ?>

</main>
