<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fachren</title>
</head>

<body>
    <form action="" method="POST">
        Masukkan bintang <input type="text" name="bintang"><input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $bintang = $_POST['bintang'];

        for ($a = 1; $a <= $bintang; $a++) {
            for ($b = 1; $b <= $a; $b++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    ?>

</body>

</html>