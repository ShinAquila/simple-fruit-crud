<?php
    require '_functions.php';

    $fruitId = $_GET['fruitId'];

    if (isset($_POST['deleteFruit'])) {
        $request = deleteFruit($fruitId);
        
        if ($request == true) {
            header("location: index.php?note=delete");
        } else {
            header("location: index.php?note=error");
        }
    } else {
        header("location: index.php?note=invalid");
    }

?>