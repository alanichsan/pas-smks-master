<?php
    require_once 'db.php';

    session_start();
    
    $query = "SELECT * FROM employees";

    $result = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a href="#" class="navbar-brand">Data karyawan</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <?php if(!isset($_SESSION['username'])) { ?>
                    <a href="login.php" class="nav-item nav-link btn btn-primary text-light px-3">Login</a>
                    <?php } else { ?>
                    <a href="logout.php" class="nav-item nav-link btn btn-primary text-light px-3">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row mt-4 ">
            <div class="col">
                <?php if(isset($_SESSION['username'])) { ?>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Tambah Karyawan
                    </button>
                <?php } ?>
                <div class="my-4">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="bg-primary text-light">#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Salary</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Allowance (Tunjangan)</th>
                                <?php if(isset($_SESSION['username'])) { ?>
                                    <th>Action</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td class="bg-primary text-light">1</td>
                                            <td><?= $row['name']; ?></td>
                                            <td><?= $row['address']; ?></td>
                                            <td><?= $row['salary']; ?></td>
                                            <td><?= $row['department']; ?></td>
                                            <td><?= $row['position']; ?></td>
                                            <td><?= $row['allowance']; ?></td>
                                            <?php if(isset($_SESSION['username'])) { ?>
                                                <td> 
                                                    <?php 
                                                        $id = $row['id'];
                                                        $query = "SELECT * FROM employees WHERE id = $id";

                                                        $employe = mysqli_query($link, $query);
                                                    ?>
                                                    <a href="" class="badge badge-warning text-light" data-toggle="modal" data-target="#edit<?= $id ?>">edit</a>
                                                    <div class="modal fade bd-example-modal-lg" id="edit<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary">
                                                                    <h5 class="modal-title text-light" id="exampleModalLongTitle">Edit Karyawan</h5>
                                                                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="update.php?id=<?= $id ?>" method="post">
                                                                    <?php 
                                                                        if(mysqli_num_rows($employe) != 0) {
                                                                            $row = mysqli_fetch_array($employe); ?>
                                                                            <div class="modal-body p-3">
                                                                                <div class="form-group">
                                                                                    <label for="name">Name</label>
                                                                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?= $row['name']; ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="address">Address</label>
                                                                                    <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="<?= $row['address']; ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="salary">Salary</label>
                                                                                    <input type="text" class="form-control" id="salary" placeholder="Salary" name="salary" value="<?= $row['salary']; ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="department">Department</label>
                                                                                    <input type="text" class="form-control" id="department" placeholder="Department" name="department" value="<?= $row['department']; ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="position">Position</label>
                                                                                    <input type="text" class="form-control" id="position" placeholder="Position" name="position" value="<?= $row['position']; ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="allowance">Allowance (Tunjangan)</label>
                                                                                    <input type="text" class="form-control" id="allowance" placeholder="Allowance (Tunjangan)" name="allowance" value="<?= $row['allowance']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                                                                            </div>
                                                                    <?php } ?>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="" class="badge badge-danger text-light" data-toggle="modal" data-target="#delete<?= $id ?>">delete</a>
                                                    <div class="modal fade" id="delete<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body p-5">
                                                                    <img src="https://res.cloudinary.com/alanichsan/image/upload/v1607320923/detele_qkmy05.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                                                                    <h3 class="text-center mt-5">Success Delete</h3>
                                                                    <a href="delete.php?id=<?= $id ?>" >Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php } ?>
                                        </tr>
                                    <?php }
                                } ?>        
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-light" id="exampleModalLongTitle">Tambah Karyawan</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="create.php" method="post">
                    <div class="modal-body p-3">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="text" class="form-control" id="salary" placeholder="Salary" name="salary">
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" class="form-control" id="department" placeholder="Department" name="department">
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" class="form-control" id="position" placeholder="Position" name="position">
                        </div>
                        <div class="form-group">
                            <label for="allowance">Allowance (tunjangan)</label>
                            <input type="text" class="form-control" id="allowance" placeholder="Allowance (Tunjangan)" name="allowance">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>