<?php
    require '_functions.php';

    if (isset($_POST['fruitSearch'])) {
        $fruitSearch = $_POST['fruitSearch'];

        if (empty($fruitSearch)) {
            header("location: index.php?note=invalid");
        } else {
            header("location: fruit_search.php?searchText=$fruitSearch");
        }
    } else {
        header("location: index.php?note=invalid");
    }

?>