<?php

/* * ********************************
*  Functions for default display
* ********************************* */
function laptopsDisplay($laptops)
{
    $dv = '<ul>';
    foreach ($laptops as $laptop) {
        $dv .= '<li>' . $laptop['laptopmaker'] . ' ' . $laptop['laptopmodel'] . ' ';
        $dv .= $laptop['laptopcpu'] . ' ' . $laptop['laptopgpu'] . ' ';
        $dv .= $laptop['laptopram'] . "GB" . ' ' . $laptop['laptopstorage'] . "TB ";
        $dv .= $laptop['laptopscreen'] . "\"";
        $dv .= "<a href=/week4/?action=laptopDetails&laptopId=" . $laptop['laptopid'] . ">View details</a>";
        $dv .= '</li>';
    }
    $dv .= '</ul>';
    return $dv;
}

/* * ********************************
*  Display the details for a specific laptop
* ********************************* */
function laptopDetails($laptopId, $laptops) {    
    //$dv =  $laptopId . " -- " . $laptops[0]['laptopmaker'] . " " . $laptops[2]['laptopmaker'];
    $dv =  $laptops[$laptopId]['laptopmaker'] . ' ' . $laptops[$laptopId]['laptopmodel'] . ' ';
    $dv .= $laptops[$laptopId]['laptopcpu'] . ' ' . $laptops[$laptopId]['laptopgpu'] . ' ';
    $dv .= $laptops[$laptopId]['laptopram'] . "GB" . ' ' . $laptops[$laptopId]['laptopstorage'] . "TB ";
    $dv .= $laptops[$laptopId]['laptopscreen'] . "\" ";
    $dv .= $laptops[$laptopId]['laptopSpecs'];


    $dv .= "<form action=\"index.php\" method=\"post\" id=\"addpref\">";
    $dv .= "<h3>What you like:</h3>";
    $dv .= "<textarea name=\"likeText\" id=\"likeText\"></textarea><br><br>";
    $dv .= "<h3>What you dislike:</h3>";
    $dv .= "<textarea name=\"dislikeText\" id=\"dislikeText\"></textarea><br><br>";

    $dv .= "<input type=\"submit\" name=\"submit\" value=\"Add Preference\" id=\"formButton\">";
    $dv .= "<input type=\"hidden\" name=\"action\" value=\"addpref\">";
    $dv .= "<input type=\"hidden\" name=\"laptopId\" value=" . $laptopId . "></form><br><br>";


    //$dv .= "<span onclick=" . removePreferedLaptop($laptopId) . " class=`preferedLaptop`>Add to prefered laptop</span><br>";
    return $dv;
}

/* * ********************************
*  Get all information for every laptop
* ********************************* */
function laptopsData($db)
{
    $query = 'SELECT * FROM laptops';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $laptops;
}

/* * ********************************
*  Filtered laptop display
* ********************************* */

function filterLaptops($filter, $db)
{

    if ($filter[0]) {
        $sql = 'SELECT * FROM laptops WHERE laptopmaker = :filterMaker';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':filterMaker', $filter[0], PDO::PARAM_STR);
    }
    
    if ($filter[1]) {
        $sql = 'SELECT * FROM laptops WHERE laptopram = :filterRam';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':filterRam', $filter[1], PDO::PARAM_STR);
    }
    if ($filter[2]) {
        $sql = 'SELECT * FROM laptops WHERE laptopcpu = :filterCpu';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':filterCpu', $filter[2], PDO::PARAM_STR);
    }
    if ($filter[3]) {
        $sql = 'SELECT * FROM laptops WHERE laptopgpu = :filterGpu';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':filterGpu', $filter[3], PDO::PARAM_STR);
    }
    if ($filter[4]) {
        $sql = 'SELECT * FROM laptops WHERE laptopstorage = :filterStorage';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':filterStorage', $filter[4], PDO::PARAM_STR);
    }
    if ($filter[5]) {
        $sql = 'SELECT * FROM laptops WHERE laptopscreen = :filterScreen';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':filterScreen', $filter[5], PDO::PARAM_STR);
    }
    
    //$sql = 'SELECT * FROM laptops WHERE laptopmaker = :filterMaker';
    
    
    //$stmt->bindValue(':filterRam', $filter[1], PDO::PARAM_STR);
    //$stmt->bindValue(':filterCpu', $filter[2], PDO::PARAM_STR);
    //$stmt->bindValue(':filterGpu', $filter[3], PDO::PARAM_STR);
    //$stmt->bindValue(':filterStorage', $filter[4], PDO::PARAM_STR);
    //$stmt->bindValue(':filterScreen', $filter[5], PDO::PARAM_STR);
    //$sql = 'SELECT * FROM laptops WHERE laptopmaker = :filter';
    //$stmt = $db->prepare($sql);
    // $stmt->bindValue(':filter', $filter, PDO::PARAM_STR);
    $stmt->execute();
    $laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $laptops;
}

/* * ********************************
*  Adds prefered laptop to database list
* ********************************* */
function addPreferedLaptop($prefId, $likeText, $dislikeText, $laptopId, $userId) {
    $prefDate = date("Y-m-d H:i:s");
    $db = get_db();
    $sql = 'INSERT INTO userpreference (prefId, likeText, dislikeText, prefDate, laptopId, userId) VALUES (:prefId, :likeText, :dislikeText, :prefDate, :laptopId, :userId);';
    $stmt = $db->prepare($sql);
    //prefId, likeText, dislikeText, prefDate, laptopId, userId
    $stmt->bindValue(':prefId', $prefId, PDO::PARAM_INT);
    $stmt->bindValue(':likeText', $likeText, PDO::PARAM_STR);
    $stmt->bindValue(':dislikeText', $dislikeText, PDO::PARAM_STR);
    $stmt->bindValue(':prefDate', $prefDate, PDO::PARAM_STR);
    $stmt->bindValue(':laptopId', $laptopId, PDO::PARAM_INT);
    $stmt->bindValue(':userId', $userId, PDO::PARAM_INT);

    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

/* * ********************************
*  Removes prefered laptop from database list
* ********************************* */
function removePreferedLaptop($laptopId) {
    $db = get_db();
    $sql = 'DELETE FROM userpreference WHERE laptopId = :laptopId';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':laptopId', $laptopId, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

/* * ********************************
*  Display basic information on all laptops
* ********************************* */
function displayPreferedLaptops($prefLaptops, $laptops) {
    
    $dv = '<ul>';
    foreach ($prefLaptops as $prefLaptop) {
        $id = $prefLaptop['laptopid'];
        $dv .= '<li>' . $laptops[$id]['laptopmaker'] . ' ' . $laptops[$id]['laptopmodel'] . ' ';
        $dv .= $laptops[$id]['laptopcpu'] . ' ' . $laptops[$id]['laptopgpu'] . ' ';
        $dv .= $laptops[$id]['laptopram'] . "GB" . ' ' . $laptops[$id]['laptopstorage'] . "TB ";
        $dv .= $laptops[$id]['laptopscreen'] . "\"";
        //$dv .= "<a href=/WDD-341/web/week4/?action=editReview&reviewId=" . $laptops['reviewId'] . ">Edit</a>";
        $dv .= "<p>Preferences: " . $prefLaptop['liketext'] . "</p>";
        $dv .= "<p>Dislike: " . $prefLaptop['disliketext'] . "</p>";
        $dv .= "<p>Preference Date: " . $prefLaptop['predate'] . "</p>";
        $dv .= '</li>';
        $dv .= "<span onclick=" . removePreferedLaptop($id) . " class=`preferedLaptop`>Add to prefered laptop</span><br><br>";
    }
    $dv .= '</ul>';

    //$dv = "<pre>" . print_r($prefLaptops[0]) . "</pre>";

    return $dv;
}

/* * ********************************
*  Get all data about prefered laptops
* ********************************* */
function preferedLaptopsData($db) {
    $query = 'SELECT * FROM userpreference';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $laptops;
}



/* * ********************************
*  Displays links for navigation
* ********************************* */
function displayNavigation() {
    $navLinks = "<ul>";
    $navLinks .= "<li><a href='/index.php'>Home</a></li>";
    $navLinks .= "<li><a href='index.php'>Laptops</a></li>";
    $navLinks .= "<li><a href='index.php?action=displayPref'>Prefered Laptops</a></li>";
    $navLinks .= "</ul>";

    return $navLinks;
}