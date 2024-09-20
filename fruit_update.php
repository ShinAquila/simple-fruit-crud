<?php
    require '_functions.php';

    $fruitId = $_GET['fruitId'];

    if (isset($_POST['updateFruit'])) {
        $fruitName = $_POST['fruitName'];
        $fruitQty = $_POST['fruitQty'];
        // echo '<script>alert($fruitId)</script>';
        
        $request = updateFruit($fruitName, $fruitQty, $fruitId);
        
        if ($request == true) {
            header("location: index.php?note=update");
        } else {
            header("location: index.php?note=error");
        }
    } else {
        header("location: index.php?note=invalid");
    }

?>