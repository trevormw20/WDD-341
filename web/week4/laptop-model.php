<?php

/*
* Reviews Model
*/
/*
* o Insert a review
* o Get reviews for a specific inventory item
* o Get reviews written by a specific client
* o Get a specific review
* o Update a specific review
* o Delete a specific review
*/

//Insert a review
/*
function insertReview($reviewText, $invId, $clientId) {
    $reviewDate = date("Y-m-d H:i:s");
    $db = phpmotorsConnect();
    $sql = 'INSERT INTO reviews (reviewText, reviewDate, invId, clientId) VALUES (:reviewText, :reviewDate, :invId, :clientId);';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':reviewText', $reviewText, PDO::PARAM_STR);
    $stmt->bindValue(':reviewDate', $reviewDate, PDO::PARAM_STR);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->bindValue(':clientId', $clientId, PDO::PARAM_INT);

    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

//done
//Update a specific review
function updateReview($reviewText, $reviewId) {
    $reviewDate = date("Y-m-d");
    $db = phpmotorsConnect();
    //$sql = 'UPDATE reviews SET reviewText = :reviewText WHERE reviews.reviewId = :reviewId';
    $sql = 'UPDATE reviews SET reviewText = :reviewText, reviewDate = :reviewDate WHERE reviewId = :reviewId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':reviewText', $reviewText, PDO::PARAM_STR);
    $stmt->bindValue(':reviewDate', $reviewDate, PDO::PARAM_STR);
    $stmt->bindValue(':reviewId', $reviewId, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

//done
//Delete a specific review
function deleteReview($reviewId) {
    $db = phpmotorsConnect();
    $sql = 'DELETE FROM reviews WHERE reviewId = :reviewId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':reviewId', $reviewId, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}



//done
//Get a specific review
function specificReview($reviewId) {
    $db = phpmotorsConnect();
    $sql = 'SELECT * FROM reviews WHERE reviewId = :reviewId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':reviewId', $reviewId, PDO::PARAM_INT);
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $reviews;
}

//done
//Get reviews for a specific inventory item
function displayCarReviews($invId) {
    $db = phpmotorsConnect();
    $sql = 'SELECT * FROM reviews WHERE invId = :invId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':invId', $invId, PDO::PARAM_INT);
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $reviews;
}

function updateReviewDisplay($review)
{
    $dv = "Reviewed on " . $review['reviewDate'];
    $dv .= "<form action=\"/phpmotors/reviews/\" method=\"post\">";
    $dv .= "<br><br><label for=\"reviewText\">Review Text</label><br>";
    $dv .= "<textarea name=\"reviewText\" id=\"reviewText\" required>";
    $dv .= "$review[reviewText]";
    $dv .= "</textarea><br><br>";

    $dv .= "<input type=\"submit\" value=\"Update Review\">";
    $dv .= "<input type=\"hidden\" name=\"action\" value=\"updateReview\">";
    $dv .= "<input type=\"hidden\" name=\"reviewId\" value=\"$review[reviewId]\"><br><br>";

    $dv .= "</form>";
    return $dv;
}

function confirmDeleteReview($review)
{
    $dv = "Reviewed on " . $review['reviewDate'];
    $dv .= "<p>Deletes cannot be undone. Are you sure you want to delete this review?</p><br>";
    $dv .= "<div id='reviewBox'> Review Text<br>";
    $dv .= "<div id=\"confirmDelete\">" . $review['reviewText'] . "</div>";
    $dv .= "<br><a href=/phpmotors/reviews/?action=deleteReview&reviewId=" . $review['reviewId'] . ">Delete</a></div>";
    return $dv;
}


/* * ********************************
*  Functions for default display
* ********************************* */

/*
* Proxy connection to the phpmotors database
*/ 

function laptopsDisplay($laptops)
{
    $dv = '<ul>';
    foreach ($laptops as $laptop) {
        $dv .= $laptops[$laptop]['laptopmodel'] . "<br>";
        $dv .= $laptops[$laptop]['laptopmaker'] . "<br>";
        $dv .= "<a href=/WDD-341/web/week4/?action=editReview&reviewId=" . $laptops['reviewId'] . ">Edit</a>";
        $dv .= '</li>';
    }
    $dv .= '</ul>';
    return $dv;
}

//done
//Get reviews written by a specific client
function laptopsData($db) {
    
    $query = 'SELECT * FROM laptops';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $laptops;
}



//examples
//$reviews = clientReviews($_SESSION['clientData']['clientId']);
