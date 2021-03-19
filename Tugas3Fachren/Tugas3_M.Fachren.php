<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.Fachren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php
    for ($no = 1; $no <= 100; ++$no) {
        if ($no % 2 == 0) {
            echo "$no = ";
            echo "<font style='color:;'>Kalau yang ini bilangan genap</font><br>";
        } else {
            echo "$no = ";
            echo "<font style='color:blue;'>Ini bilangan ganjil</font><br>";
        }
    }
    
  ?>
</body>

</html>