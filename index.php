<?php
 include 'partials/_connect.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
<!--<i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i> -->

<body>
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
     include 'header/_header_index.php';
    ?>
    <div class="container">
        <div class="row flex-lg-nowrap">
            <div class="col">
                <div class="e-tabs mb-3 px-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#">Fields</a></li>
                    </ul>
                </div>

                <div class="row flex-lg-nowrap">
                    <div class="col mb-3">
                        <div class="e-panel card">
                            <div class="card-body">
                                <div class="e-table">
                                    <div class="table-responsive table-lg mt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th class="max-width">Email</th>
                                                    <th>Password</th>
                                                    <th class="sortable">Date & Time</th>
                                                    <th>Desc</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $sql = "SELECT * FROM `data`";
                                                $result = mysqli_query($conn,$sql);
                                                $rowNo = mysqli_num_rows($result);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo
                                                '<tr>
                                                    <td class="text-nowrap align-middle">'.$row['data_title'].'</td>
                                                    <td class="text-nowrap align-middle">'.$row['data_email'].'</td>
                                                    <td class="text-nowrap align-middle">'.$row['data_new_password'].'</td>
                                                    <td class="text-nowrap align-middle">'.$row['data_date_time'].'</td>
                                                    <td class="text-nowrap align-middle">'.$row['data_description'].'</td>
                                                    <td class="text-center align-middle">
                                                    <div class="btn-group align-top">

                                                    <a href="partials/_edit.php?data_index='.$row['data_index'].'" class="btn btn-success btn-block">Edit</a>
                                                    <a class="btn btn-danger btn-block" href="partials/_delete.php?data_index='.$row['data_index'].' class="">Delete</a>

                                                    </div>
                                                    </td>
                                                </tr>';
                                            }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center px-xl-3">
                                    <button type="button" class="btn btn-success btn-block" data-bs-toggle="modal"
                                        data-bs-target="#Add_data">
                                        Add Field
                                    </button>
                                </div>
                                <hr class="my-3">
                                <div class="e-navlist e-navlist--active-bold">
                                    <ul class="nav">
                                        <li class="nav-item active"><a href=""
                                                class="nav-link"><span>Fields</span>&nbsp;<small>/&nbsp;<?php echo $rowNo;?></small></a>
                                        </li>

                                        <li class="nav-item"><a href=""
                                                class="nav-link"><span>Selected</span>&nbsp;<small>/&nbsp;0</small></a>
                                        </li>
                                    </ul>
                                </div>
                                <hr class="my-3">
                                <div>
                                    <form class="form" action="search/_search_by_title.php" method="GET">
                                        <div class="row">
                                            <div class="form-group">
                                                <label>Search by Title:</label>
                                                <div><input class="form-control w-100" type="text" placeholder="Title" name="search_title"
                                                        value="">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col d-flex justify-content-center">
                                                    <button class="btn btn-primary mt-2" name="search_by_title"
                                                        type="submit">Search</button> 
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
     include 'modals/_insert_modal.php';
    ?>

</body>

</html>