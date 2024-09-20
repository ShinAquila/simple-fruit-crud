<?php
require '_functions.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Boostrap CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>

    <!-- Toastr CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    <title>CRUD Activity idk</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Create / Retrieve / Update / Delete
                        <button
                            type="button"
                            class="btn btn-primary float-end"
                            data-bs-toggle="modal"
                            data-bs-target="#create">
                            Create Fruits
                        </button>
                    </div>
                    <div class="card-body">
                        <form action="_redirect.php" method="post">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="fruitSearch"
                                    id="fruitSearch"
                                    placeholder="Search here ..."
                                    autofocus
                                    required>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Fruit</th>
                                        <th>Quantity</th>
                                        <th>Registered</th>
                                        <th>Updated</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $getFruits = selectFruits();

                                    while ($fruit = $getFruits->fetch(PDO::FETCH_ASSOC)) {
                                    ?>

                                        <tr>
                                            <td class="text-center">
                                                <?= $fruit['fruit_id'] ?>
                                            </td>
                                            <td>
                                                <?= $fruit['fruit_name'] ?>
                                            </td>
                                            <td>
                                                <?= $fruit['fruit_qty'] ?> pc(s)
                                            </td>
                                            <td>
                                                <?= date("M d, Y g:i A", strtotime($fruit['fruit_created'])) ?>
                                            </td>
                                            <td>
                                                <?= date("M d, Y g:i A", strtotime($fruit['fruit_updated'])) ?>
                                            </td>

                                            <td class="text-center">
                                                <button
                                                    type="button"
                                                    class="btn btn-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#edit_">Edit
                                                </button>
                                            </td>
                                            <td class="text-center">
                                                <button
                                                    type="button"
                                                    class="btn btn-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete_">Delete
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add fruit modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="create">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Fruit</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="fruit_create.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="form-label">Fruit Name</label>
                            <input type="text" class="form-control" name="fruitName" id="fruitName" required>
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Quantity</label>
                            <input type="number" class="form-control" name="fruitQty" id="fruitQty" min="0" step="0.01" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="createFruit" id="createFruit" class="btn btn-primary">Create</button>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include '_scripts.php' ?>
    <?php include '_alers.php' ?>


</body>

</html>