<?php
    require __DIR__ . '/database.php';
    

    if( empty($_GET['genre']) || $_GET['genre'] === 'all' ) {
        header('Content-Type: application/json');
        echo json_encode($database);
    } else {
        $filteredGenre = [];

        foreach($database as $genre) {
            if($genre['genre'] === $_GET['genre']) {
                $filteredGenre = $genre;
            }
        }
        
        header('Content-Type: application/json');
        echo json_encode($filteredGenre);
    }
?>