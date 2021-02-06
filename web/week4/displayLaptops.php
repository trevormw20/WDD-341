


<?php 
//laptops controller
//require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD-341/web/week4/laptop-model.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD-341/web/week4/dbConnect.php';

$db = get_db();

$query = 'SELECT * FROM laptops';
$stmt = $db($query);
$stmt->execute();
$laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main>

<?php //if (isset($laptopDisplay)) {
		//echo $laptopDisplay;}

echo $laptops;
	 ?>

</main>
