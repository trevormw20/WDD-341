<?php 
$query = 'SELECT * FROM laptops';
$stmt = $db($query);
$stmt->execute();
$laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<title><?php echo "$vehicle[invMake] $vehicle[invModel]"; ?> vehicles | PHP Motors, Inc.</title>

<main>
<?php
if (isset($message)) {
	echo $message;
} ?>

<?php //if (isset($laptopDisplay)) {
		//echo $laptopDisplay;}

echo $laptops;
	 ?>

</main>



<?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>