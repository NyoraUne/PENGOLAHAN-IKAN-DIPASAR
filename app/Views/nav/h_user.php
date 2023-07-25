<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .headtext {
            font-family: verdana;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            font-size: 35px;
            color: rgb(255, 255, 255);
            text-shadow: rgb(0, 0, 0) 2px 2px 2px;
        }

        .headtext2 {
            /* font-family: verdana; */
            font-weight: bold;
            text-transform: uppercase;
            font-size: 35px;
            color: black;
            text-shadow: rgb(0, 0, 0) 2px 2px 2px;
        }

        .img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 100%;
            height: 200px;
            filter: drop-shadow(8px 8px 10px #000);
            object-fit: cover;
            object-position: 20% 70%;
            display: block;
        }

        @keyframes example {
            0% {
                width: 100%;
                height: 200px;
            }

            100% {
                background-color: black;
                width: 100%;
                height: 70vh;
            }
        }

        .img:hover {
            animation-name: example;
            animation-duration: 4s;
            /* animation-iteration-count: infinite; */
            animation-fill-mode: forwards;
            position: relative;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <!-- /* -------------------------- //ANCHOR - nav start -------------------------- */ -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DISKAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('User_pasar/index'); ?>">Harga Ikan Di Pasar</a></li>
                            <li><a class="dropdown-item" href="#">Laporan Pasar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Feedback</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- /* --------------------------- //ANCHOR - nav End --------------------------- */ -->
    <div class="container-fluid mt-2">