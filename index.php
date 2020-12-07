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
                <a href="login.php" class="nav-item nav-link btn btn-primary text-light px-3">Login</a>
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="row mt-4 ">
    <div class="col">
    <div class="my-4">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Tambah Karyawan
</button>
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
                        <input type="text" class="form-control" id="allowance" placeholder="allowance (tunjangan)" name="allowance">
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

    
    <table class="table table-hover">
    <thead>
        <tr>
            <th class="bg-primary text-light">#</th>
            <th>name</th>
            <th>department</th>
            <th>position</th>
            <th>allowance (tunjangan)</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="bg-primary text-light">1</td>
            <td>Clark</td>
            <td>Random</td>
            <td>Bos</td>
            <td>none</td>
            <td> 
                <a href="" class="badge badge-warning text-light" data-toggle="modal" data-target="#edit">edit</a>
                <div class="modal fade bd-example-modal-lg" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="exampleModalLongTitle">Edit Karyawan</h5>
                            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-3">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" value="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Department</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="department">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Position</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="position">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Allowance (tunjangan)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="allowance (tunjangan)">
                                    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>

                <a href="" class="badge badge-danger text-light" data-toggle="modal" data-target="#delete">delete</a>
                <!-- Modal -->
                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            </div>
                            </div>
                        </div>
                        </div>
            </td>
        </tr>
        <tr>
            <td class="bg-primary text-light">2</td>
            <td>John</td>
            <td>Random</td>
            <td>Manager</td>
            <td>none</td>
            <td> 
                <a href="" class="badge badge-warning text-light" data-toggle="modal" data-target="#edit">edit</a>
                                <!-- Modal edit -->
                <div class="modal fade bd-example-modal-lg" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="exampleModalLongTitle">Edit Karyawan</h5>
                            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-3">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" value="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Department</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="department">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Position</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="position">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Allowance (tunjangan)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="allowance (tunjangan)">
                                    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>

                <a href="" class="badge badge-danger text-light" data-toggle="modal" data-target="#delete">delete</a>
                <!-- Modal delete -->
                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            </div>
                            </div>
                        </div>
                        </div>
            </td>
        </tr>
        <tr>
            <td class="bg-primary text-light">3</td>
            <td>Peter</td>
            <td>Random</td>
            <td>OB</td>
            <td>Belum gajian 3 Bulan</td>
            <td> 
                <a href="" class="badge badge-warning text-light" data-toggle="modal" data-target="#edit">edit</a>
                <div class="modal fade bd-example-modal-lg" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-light" id="exampleModalLongTitle">Edit Karyawan</h5>
                            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body p-3">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" value="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Department</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="department">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Position</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="position">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Allowance (tunjangan)</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2" value="allowance (tunjangan)">
                                    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>

                <a href="" class="badge badge-danger text-light" data-toggle="modal" data-target="#delete">delete</a>
                <!-- Modal -->
                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            </div>
                            </div>
                        </div>
                        </div>
            </td>
        </tr>            
    </tbody>
</table>
    </div>
    </div> 
    </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>