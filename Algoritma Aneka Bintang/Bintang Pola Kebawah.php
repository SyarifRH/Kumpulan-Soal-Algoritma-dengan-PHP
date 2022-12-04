<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintang Pola Kebawah</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Masukan Angka</label>
        <input type="text" name="inputAngka">
        <label for="">Masukan Simbol</label>
        <input type="text" name="inputSimbol">
        <button type="submit">Proses</button>
    </form>

    <?php
    if (isset($_POST['inputAngka']))
        for ($i = 0; $i < $_POST['inputAngka']; $i++) {
            echo $_POST['inputSimbol'] . "<br>";
        }
    ?>
</body>

</html>