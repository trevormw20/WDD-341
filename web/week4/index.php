<?php
/*
//laptops controller
require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD-341/web/week4/laptop-model.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD-341/web/week4/dbConnect.php';

$db = get_db();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

*/


//switch ($action) {
/*
    case 'insertNewReview':
        $reviewText = filter_input(INPUT_POST, 'reviewText', FILTER_SANITIZE_STRING);
        $invId = filter_input(INPUT_POST, 'invId', FILTER_SANITIZE_NUMBER_INT);
        $clientId = filter_input(INPUT_POST, 'clientId', FILTER_SANITIZE_NUMBER_INT);

        if (
            empty($reviewText) || empty($invId) || empty($clientId)) {
            $message = '<p class="center">Please provide information for all empty form fields.</p>';
            include '../accounts/index.php';
            exit;
        }

        $reviewAdded = insertReview($reviewText, $invId, $clientId);

        if ($reviewAdded) {
            $message = '<p class="center">Thanks for the review, it is displayed below.</p>';
            //return to detail view and not the admin view
           // header("Refresh:0");
           header("Refresh:0; url=../vehicles/");
            exit;
        } else {
            $message = '<p class="center">The reivew could not be added at this time. Please try agian later.</p>';
            //header("Refresh:0");
            exit;
        }
        break;

    case 'editReview':
        $pageTitle = 'Confirm Deletion';
        //where does the input come from?
        $reviewId = filter_input(INPUT_GET, 'reviewId', FILTER_SANITIZE_NUMBER_INT);
        $review = specificReview($reviewId);
        $vehicle = getInvItemInfo($review[0]['invId']);
        if (count($review) < 1) {
        $message = 'Sorry, no review information could be found.';
        }
        $reviewDisplay = updateReviewDisplay($review[0]);
        include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/view/review-update.php';
        break;

    case 'updateReview':

        $reviewText = filter_input(INPUT_POST, 'reviewText', FILTER_SANITIZE_STRING);
        $clientId = filter_input(INPUT_POST, 'clientId', FILTER_SANITIZE_NUMBER_INT);
        $reviewId = filter_input(INPUT_POST, 'reviewId', FILTER_SANITIZE_NUMBER_INT);

        if (
            empty($reviewText) || empty($reviewId)) {
            $message = '<p>There was an error updating the review. Please try again later.</p>';
            include '../accounts/index.php';
            exit;
        }
        $reviewUpdateResult = updateReview($reviewText, $reviewId);
        
        if ($reviewUpdateResult) {
            $message = "<p class='notice'>The review was updated successfully.</p>";
            $_SESSION['message'] = $message;
            include '../accounts/index.php';
            exit;
        } else {
            $message = "<p class='notice'>Error. The review could not be updated.</p>";
            include '../accounts/index.php';
            exit;
        }
        
        break;

    case 'confirmDeletionView':
        $pageTitle = 'Confirm Deletion';
        $reviewId = filter_input(INPUT_GET, 'reviewId', FILTER_SANITIZE_NUMBER_INT);
        echo $reviewId;
        $review = specificReview($reviewId);
        $vehicle = getInvItemInfo($review[0]['invId']);
        $confirmDeleteReview = confirmDeleteReview($review[0]);
        include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/view/confirm-deletion.php';
        break;
        
    //done
    case 'deleteReview':
        $reviewId = filter_input(INPUT_GET, 'reviewId', FILTER_SANITIZE_NUMBER_INT);
        $clientId = filter_input(INPUT_POST, 'clientId', FILTER_SANITIZE_NUMBER_INT);

        $deleteResult = deleteReview($reviewId);
        if ($deleteResult) {
            $message = "<p class='notice'>The review was deleted successfully.</p>";
            $_SESSION['message'] = $message;
            include '../accounts/index.php';
            exit;
        } else {
            $message = "<p class='notice'>Error: the review was not
          deleted.</p>";
            $_SESSION['message'] = $message;
            include '../accounts/index.php';
            exit;
        }
        break;

    */
       // default:
        //$pageTitle = 'Profile';
       // $laptops = laptopsData();
        //$laptopDisplay = laptopsDisplay($laptops);
        //include '../week4/displayLaptops.php';
        //exit;
        //break;
//}

//check for existing review before letting them make a new one on vehicle details page.

?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WDD341 Hello World</title>
        <meta name="description" content="Trevor Williams Hello World file for WDD 341">
    </head>

	<body>
		<nav>
            <h1>WDD341 Hello World update</h1>
		</nav>

		<main>
		</main>

		<footer>
		</footer>
	</body>
</html>