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
        $dv .= "<a href=/week4/?action=laptopDetails&laptopId=" . $laptop['laptopId'] . ">View details</a>";
        $dv .= '</li>';
    }
    $dv .= '</ul>';
    return $dv;
}

https://intense-springs-32154.herokuapp.com/week4/index.php
https://intense-springs-32154.herokuapp.com/WDD-341/web/week4/?action=laptopDetails

function laptopsData($db)
{

    $query = 'SELECT * FROM laptops';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $laptops;
}

//filtered laptop display
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

function addPreferedLaptop($prefId, $likeText, $dislikeText, $laptopId, $userId) {
    $prefDate = date("Y-m-d H:i:s");
    $db = get_db();
    $sql = 'INSERT INTO reviews (prefId, likeText, dislikeText, prefDate, laptopId, userId) VALUES (:prefId, :likeText, :dislikeText, :prefDate, :laptopId, :userId);';
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

function displayPreferedLaptops($laptops) {
    $dv = '<ul>';
    foreach ($laptops as $laptop) {
        $dv .= '<li>' . $laptop['laptopmaker'] . ' ' . $laptop['laptopmodel'] . ' ';
        $dv .= $laptop['laptopcpu'] . ' ' . $laptop['laptopgpu'] . ' ';
        $dv .= $laptop['laptopram'] . "GB" . ' ' . $laptop['laptopstorage'] . "TB ";
        $dv .= $laptop['laptopscreen'] . "\"";
        //$dv .= "<a href=/WDD-341/web/week4/?action=editReview&reviewId=" . $laptops['reviewId'] . ">Edit</a>";
        $dv .= '</li>';
        $dv .= "<span onclick=" . removePreferedLaptop($laptop['laptopId']) . " class=`preferedLaptop`>Add to prefered laptop</span><br>";
    }
    $dv .= '</ul>';
    return $dv;
}
function preferedLaptopsData($db) {
    $query = 'SELECT * FROM userpreference';
    $stmt = $db->prepare($query);
    $stmt->execute();
    $laptops = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $laptops;
}

function laptopDetails($laptopId, $laptops) {
    $dv =  $laptops[$laptopId]['laptopmaker'] . ' ' . $laptops[$laptopId]['laptopmodel'] . ' ';
    $dv .= $laptops[$laptopId]['laptopcpu'] . ' ' . $laptops[$laptopId]['laptopgpu'] . ' ';
    $dv .= $laptops[$laptopId]['laptopram'] . "GB" . ' ' . $laptops[$laptopId]['laptopstorage'] . "TB ";
    $dv .= $laptops[$laptopId]['laptopscreen'] . "\"";
    //$dv .= "<a href=/WDD-341/web/week4/?action=editReview&reviewId=" . $laptops['reviewId'] . ">Edit</a>";
    $dv .= "<span onclick=" . removePreferedLaptop($laptopId) . " class=`preferedLaptop`>Add to prefered laptop</span><br>";
}