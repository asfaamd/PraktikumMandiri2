<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<br>
<br>
<body class="container text-center">
    <div class="card">
        <div class="card-body">
        <h4>
        <?php echo "Pendaftaranmu atas nama ".$_POST["nama"]." untuk ".$_POST["ukm"]." akan segera diproses";
?>
    </h4>
    <br>
    <br>
    <form action="index.html">
    <button class="btn btn-primary" type="submit" value="go back">Kembali</button>
    </form>
        </div>
    </div>
</body>
</html>
