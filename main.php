<?php
    // connection to db
   include 'partials/_connect.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // checking that user has submitted some values or not
        if (!($_POST['myTitle']) && !($_POST['myDescription'])) {
            echo "Enter some values in title and desc";
        } else {

            // storing form values in our own variables
            echo "title and desc added";
            $form_title = $_POST['myTitle'];
            $form_description = $_POST['myDescription'];
            
            // inserting data from form in db
            $sql = "INSERT INTO `crud` (`note_title`, `note_description`, `note_date_time`) VALUES ('$form_title', '$form_description', current_timestamp())";
            $result = mysqli_query($conn,$sql);

            // checking insertion condition
            if (!$result) {
                echo "Data is not inserted";
            } else {
                echo "Data is inserted";
            }
        }
    } else {
    echo "method is not post";
    }
?>

<?php
   // selecting all data in db for displaying
   $sql = "SELECT * FROM `crud`";
   $result = mysqli_query($conn,$sql);

   // checking the no of rows available in our db
   $rowNo = mysqli_num_rows($result);
   echo $rowNo;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php
   include 'partials/_nav.php';
   ?>

    <div class="container">
        <h1>Add Note :</h1>
        <form action="main.php" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="myTitle" aria-describedby="emailHelp"
                    placeholder="Title">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" id="desc" name="myDescription" rows="3"></textarea>
                <small id="emailHelp" class="form-text text-muted">Make sure that description is less than 1000
                    words!.</small>
            </div>

            <button type="submit" class="btn btn-primary">Add Now!</button>
        </form>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = 0;
                while($row = mysqli_fetch_assoc($result))
                echo
                '<tr>
                    <th scope="row">' . ++$id . '</th>
                    <td>' . $row['note_title'] . '</td>
                    <td>' . $row['note_description'] . '</td>
                    <td><a href="partials/_edit.php?id='. $row['note_id'] .'">Edit</a></td>
                    <td><a href="partials/_delete.php?id='. $row['note_id'] .'">Delete</a></td>
                </tr>';
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>