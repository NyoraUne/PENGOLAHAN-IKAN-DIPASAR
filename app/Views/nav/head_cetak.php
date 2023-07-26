<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        b {
            margin-top: -1px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        thead {
            background-color: grey;
            color: white;
        }

        th:first-child {
            width: 10px;
            text-align: center;
        }

        .title-sub {
            margin-bottom: 1px;
        }

        .waktu {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div style="text-align: center;">
        <h1 style="margin-bottom: -1px;">Dinas Perikanan(DISKAN) Rantau Kabupaten. Tapin</h1>
        <b> Jalan Jend. Sudirman KM. 2,5, Rantau Kiwa, Tapin Utara, Rantau Kiwa,<br> Kec. Tapin Utara, Kabupaten Tapin, Kalimantan Selatan 71114</b>
    </div>
    <hr>
    <h3 class="title-sub"><?= $title; ?></h3>
    <div class="waktu">
        <?= $msg; ?>

    </div>