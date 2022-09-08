<?php
    include '_connect.php';
?>
<?php
     session_start();
     if (!($_SESSION['login'])) {
         header("location: private/_login.php");
         exit;
     }
     $login_user_id = $_SESSION['login_id'];
     echo $login_user_id;
?>
<?php
    $data_index = $_GET['data_index'];
    
    // echo $data_index;
    $sql = "SELECT * FROM `data` WHERE data_index='$data_index'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $data_old_password=$row['data_old_password'];
    echo $data_old_password;

    if (isset($_POST['edit'])) {

    $title = $_POST['title'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $opassword = $_POST['opassword'];
    $npassword = $_POST['npassword'];


    if ($data_old_password != $opassword) {
        echo "Incorrect Password ";
        header("location:../index.php");            
    }
    else {
            $sql = "UPDATE `data` SET `login_user_id`='$login_user_id',`data_index`='$data_index',`data_title`='$title',`data_email`='$email',`data_description`='$description',`data_old_password`='$opassword',`data_new_password`='$npassword',`data_date_time`=current_timestamp() WHERE data_index='$data_index'";
            $result = mysqli_query($conn,$sql);
            $rowNo = mysqli_num_rows($result);
            header("location:../index.php");            
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php
     include '../header/_header.php';
    ?>

    <?php
     include '../modals/_edit_modal.php';
    ?>

</body>

</html>