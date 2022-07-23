<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Database</title>
</head>

<body>

    <!-- Delete Modal  -->
    <div class="modal" id="deletemodal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="deletecode.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <h6>This action cannot be undone and you will be unable to recover any data.<b6>
                            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" name="yes" class="btn btn-primary">Yes, I'm sure.</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Form Modal -->
    <div class="modal fade" id="adddata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="insertcode.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">ID No.</label>
                            <input type="text" name="id" placeholder="Enter your college ID number" class="form-control">
                            <small style="color:gray ; font-size:smaller; opacity:70%">ID field cannnot be updated later.</small><br>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter your name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="number" name="age" placeholder="Enter your age" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" placeholder="Enter your address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Degree</label>
                            <input type="text" name="education" placeholder="Enter name of the degree you're currently pursuing" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Course Title</label>
                            <input type="text" name="course" placeholder="e.g BIM, BCIS, etc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Semester</label>
                            <input type="text" name="semester" placeholder="e.g 4th, 6th, etc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">College</label>
                            <input type="text" name="college" placeholder="Enter the name of your college" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">University</label>
                            <input type="text" name="university" placeholder="e.g TU, PU, etc" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="insert" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ########################################################################################################################################################## -->
    <!-- Update Modal    -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="updatecode.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">ID No.</label>
                            <input type="text" name="id" id="id" placeholder="Enter your college ID number" class="form-control" readonly>
                            <small style="color:gray ; font-size:smaller; opacity:70%">ID field cannnot be updated.</small><br>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Age</label>
                            <input type="number" name="age" id="age" placeholder="Enter your age" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Degree</label>
                            <input type="text" name="education" id="education" placeholder="Enter name of the degree you're currently pursuing" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Course Title</label>
                            <input type="text" name="course" id="course" placeholder="e.g BIM, BCIS, etc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Semester</label>
                            <input type="text" name="semester" id="semester" placeholder="e.g 4th, 6th, etc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">College</label>
                            <input type="text" name="college" id="college" placeholder="Enter the name of your college" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">University</label>
                            <input type="text" name="university" id="university" placeholder="e.g TU, PU, etc" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- #################################################################################################################################################### -->
    <div class="container">
        <div class="jumbotron jumbotron-fluid"><br><br>
            <h1>Information Table</h1><br>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "info", 3306);
            $sql = "SELECT * FROM general";

            $query = mysqli_query($conn, $sql);

            ?>
            <table class="table table-bordered">
                <thead class="thead thead-dark">
                    <tr>
                        <th scope="col">ID No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Education</th>
                        <th scope="col">Course</th>
                        <th scope="col">Semester</th>
                        <th scope="col">College</th>
                        <th scope="col">University</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <?php
                if ($query) {
                    foreach ($query as $row) {
                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['age'];  ?></td>
                                <td><?php echo $row['address'];  ?></td>
                                <td><?php echo $row['education'];  ?></td>
                                <td><?php echo $row['course'];  ?></td>
                                <td><?php echo $row['semester'];  ?></td>
                                <td><?php echo $row['college'];  ?></td>
                                <td><?php echo $row['university'];  ?></td>
                                <td>
                                    <button type="button" class="btn btn-secondary update">Update</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger delete">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                    }
                } else {
                    echo "No record found.";
                }
                ?>
            </table>
            <br>
        </div>
<button type="button" class="btn btn-outline-primary insert">Fill up this form and join the others.</button>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- for delete  -->
        <script>
            $(document).ready(function() {
                $('.delete').on('click', function() {

                    $('#deletemodal').modal('show');

                    $tr = $(this).closest('tr');
                    var data = $tr.children('td').map(function() {
                        return $(this).text();
                    }).get();

                    console.log(data);

                    $('#delete_id').val(data[0]);
                });
            });
        </script>

        <!-- for edit  -->

        <script>
            $(document).ready(function() {
                $('.update').on('click', function() {
                    $('#editmodal').modal('show');
                    
                    $tr = $(this).closest('tr');
                    var data = $tr.children('td').map(function() {
                        return $(this).text();
                    }).get();
                    
                    console.log(data);
                    
                    $('#id').val(data[0]);
                    $('#name').val(data[1]);
                    $('#age').val(data[2]);
                    $('#address').val(data[3]);
                    $('#education').val(data[4]);
                    $('#course').val(data[5]);
                    $('#semester').val(data[6]);
                    $('#college').val(data[7]);
                    $('#university').val(data[8]);
                    
                    
                });
            });
            </script>

<!-- for insert  -->

        <script>
            $(document).ready(function() {
                $('.insert').on('click', function() {
                    $('#adddata').modal('show');        
                });
            });
            
            </script>
</body>

</html>