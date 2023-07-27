<html>

<head>
    <style>
        * {
            font-family: sans-serif;
        }


        .all {
            border-radius: 20px;
            text-align: center;
            margin-top: 70px;
            margin-left: 500px;
            width: 30rem;
            height: 19rem;
            background-color: #FFFFFF;
            border: 1px solid black;
        }

        .a {
            text-align: center;
            margin: 10px;
        }

        .judul {
            text-align: center;
            margin: 0;
            padding: 10px;
            border-bottom: 3px solid rgb(219, 57, 57);
        }

        .result {
            margin: 10px;
        }

        .penjelasan {
            text-align: center;
        }

        .rum {
            text-align: center;
        }

        .b input {
            margin: 5px 7px;
            padding: 1px 10px;
        }
    </style>
    <title>Tukar Mata Uang</title>
</head>

<body>
    <div class="all">
        <h1 class="judul">Tukar Mata Uang</h1>
        <h2 class="penjelasan">November 16, 2022</h2>
        <table>
            <form method="POST">
                <div class="a">
                    <label>USD.</label>
                    <input type="number" name="USD">
                </div>
                <div class="b">
                    <input type="submit" name="nt" value="RP">
                    <input type="submit" name="nt" value="EUR">
                    <input type="submit" name="nt" value="JPY">
                    <input type="submit" name="nt" value="KRW">
                    <input type="submit" name="nt" value="GBP">
                </div>
            </form>
    </div>
</body>


<?php
if (isset($_POST['nt'])) {
    $USD = $_POST['USD'];
    $nt = $_POST['nt'];
    if ($nt == "RP")
        $hasil = $USD * 15000;
    else if ($nt == "EUR")
        $hasil = $USD * 0.97;
    else if ($nt == "JPY")
        $hasil = $USD * 139.21;
    else if ($nt == "KRW")
        $hasil = $USD * 1338.30;
    else if ($nt == "GBP")
        $hasil = $USD * 0.84;
} ?>

<body>
    <div class="result">
        <label for="">result</label>
        <input type='text' value="<?php error_reporting(0);
                                    echo $hasil; ?>"><br>
    </div>
</body>

</html>