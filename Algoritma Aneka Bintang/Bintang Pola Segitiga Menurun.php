<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bintan Segitiga Menurun</title>
</head>

<body>

    <form action="" method="post">
        <label for="">Input Angka</label>
        <input type="text" name="inputAngka">
        <label for="">Input Simbol</label>
        <input type="text" name="inputSimbol">

        <button type="submit" name="submit">Proses</button>
    </form>

    <?php

    if (isset($_POST['inputAngka'])) {

        for ($i = 0; $i < $_POST['inputAngka']; $i++) {
            for ($a = 0; $a < $i; $a++) {
                echo $_POST['inputSimbol'];
            }
            echo $_POST['inputSimbol'] . "<br>";
        }
    }
    ?>
</body>

</html>