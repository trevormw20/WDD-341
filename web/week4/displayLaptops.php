<?php 

function get_db() {
	$db = NULL;

	try {
		$dbUrl = getenv('DATABASE_URL');

		if (!isset($dbUrl) || empty($dbUrl)) {
			$dbUrl = "postgres://ta_user:ta_pass@localhost:5432/scripture_ta";
		}

		$dbopts = parse_url($dbUrl);

		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');

		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
		echo "Error connecting to DB. Details: $ex";
		die();
	}

	return $db;
}

?>


<?php 
//laptops controller
//require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD-341/web/week4/laptop-model.php';
//require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD-341/web/week4/dbConnect.php';

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

		echo "<p>Test 1</p>";
		echo $laptops[0][0]['laptopModel'];
		echo "<p>Test 2</p>";
		echo $laptops[0]['laptopmodel'];

		echo '<br><br><pre>'; print_r($laptops[0]); echo '</pre>';
		

		echo '<br><br><pre>'; print_r($laptops); echo '</pre>';
		echo "<p>Test 3</p>";
		echo $laptops[0]["laptopmodel"];
		echo "<p>Test 4</p>";
		echo $laptops[0][0]["laptopmodel"];
	 ?>

</main>
