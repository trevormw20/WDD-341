<?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>

<main>

	<h3>Account Management</h3>
	<p>Use this link to update account information.</p>

	<a href="/phpmotors/accounts/?action=updateAccountView">Update Account Information</a>
	<br>
	<h3>Manage Your Product Reviews</h3>
	<?php if (isset($reviewsDisplay)) {   
		echo $reviewsDisplay;
	} ?>
	<br>
	<?php
	if ($_SESSION['clientData']['clientLevel'] > 1) {
		echo "<h3>Inventory Management</h3>
		<p>Use this link to manage the inventory.</p><p><a href= '/phpmotors/vehicles'>Vehicle Controller</a></p>";
	}
	?>
</main>



<?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>