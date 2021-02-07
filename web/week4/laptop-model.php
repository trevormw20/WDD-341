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
        //$dv .= "<a href=/WDD-341/web/week4/?action=editReview&reviewId=" . $laptops['reviewId'] . ">Edit</a>";
        $dv .= '</li><br>';
    }
    $dv .= '</ul>';
    return $dv;
}

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


