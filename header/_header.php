<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <style>
    .bg-container {
        background: #40E0D0;
    }

    .bg-tabs-content {
        background: #20B2AA;
    }

    .text-white {
        color: #fff !important;
    }

    .ui-bg-overlay-container,
    .ui-bg-video-container {
        position: relative;
    }

    .ui-bg-cover {
        background-color: transparent;
        background-position: center center;
        background-size: cover;
    }

    .ui-bg-overlay-container .ui-bg-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: block;
    }

    .bg-dark {
        background-color: rgba(24, 28, 33, 0.9) !important;
    }

    .opacity-50 {
        opacity: .5 !important;
    }

    .bg-dark {
        background-color: rgba(24, 28, 33, 0.9) !important;
    }

    .ui-bg-overlay-container>*,
    .ui-bg-video-container>* {
        position: relative;
    }

    @media (min-width: 992px) {

        .container,
        .container-fluid {
            padding-right: 2rem;
            padding-left: 2rem;
        }
    }

    .media,
    .media>:not(.media-body),
    .jumbotron,
    .card {
        -ms-flex-negative: 1;
        flex-shrink: 1;
    }

    .d-flex,
    .d-inline-flex,
    .media,
    .media>:not(.media-body),
    .jumbotron,
    .card {
        -ms-flex-negative: 1;
        flex-shrink: 1;
    }

    .ui-w-100 {
        width: 100px !important;
        height: auto;
    }

    .font-weight-bold {
        font-weight: 700 !important;
    }

    .opacity-75 {
        opacity: .75 !important;
    }

    .tabs-alt.nav-tabs .nav-link.active,
    .tabs-alt.nav-tabs .nav-link.active:hover,
    .tabs-alt.nav-tabs .nav-link.active:focus,
    .tabs-alt>.nav-tabs .nav-link.active,
    .tabs-alt>.nav-tabs .nav-link.active:hover,
    .tabs-alt>.nav-tabs .nav-link.active:focus {
        -webkit-box-shadow: 0 -2px 0 #26B4FF inset;
        box-shadow: 0 -2px 0 #26B4FF inset;
    }

    .nav-tabs:not(.nav-fill):not(.nav-justified) .nav-link,
    .nav-pills:not(.nav-fill):not(.nav-justified) .nav-link {
        margin-right: .125rem;
    }

    .nav-tabs.tabs-alt .nav-link,
    .tabs-alt>.nav-tabs .nav-link {
        border-width: 0 !important;
        border-radius: 0 !important;
        background-color: transparent !important;
    }

    .nav-tabs .nav-link.active {
        border-bottom-color: #fff;
    }
    </style>
</head>

<body my-4>
<div class="bg-container">
        <div class="container">
            <div class="text-center py-5">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt class="ui-w-100 rounded-circle">
                <div class="col-md-8 col-lg-6 col-xl-5 p-0 mx-auto">
                    <h4 class="font-weight-bold my-4 text-white">JOKER</h4>
                    <div class="text-muted mb-4">
                    Its not what you say that hurts people, but how you say !
                    </div>
                </div>

                <div class="text-center">
                    <a href="#" class="d-inline-block text-dark text-decoration-none">
                        <strong class="text-white mx-2">email</strong>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block text-dark ml-3 text-decoration-none">
                        <strong class="text-white mx-2">phone</strong>
                    </a>
                </div>
            </div>
        </div>
        <hr class="m-0">

        <ul class="nav nav-tabs bg-tabs-content tabs-alt justify-content-center">
            <li class="nav-item">
                <a class="nav-link py-4 active" href="../index.php">Home</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link py-4" href="<?php $_SERVER['PHP_SELF']?>">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-4" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-4" href="#">Logout</a>
            </li>
        </ul>

    </div>

</body>

</html>