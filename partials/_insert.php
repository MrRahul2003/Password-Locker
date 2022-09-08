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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</head>

<body>
    <?php
     if (isset($_POST['insert'])) {
        echo "True";

        $title = $_POST['title'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        if ($password != $cpassword) {
            header("location:../index.php");            
        } else {
            $sql = "INSERT INTO `data` (`login_user_id`, `data_title`, `data_email`, `data_description`, `data_old_password`, `data_new_password`, `data_date_time`) 
            VALUES ('$login_user_id', '$title', '$email', '$description', '$password', '$password', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            header("location:../index.php");            
        }
     }
    ?>


</body>

</html>