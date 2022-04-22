<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Persegi Panjang</title>
</head>

<body class="bg-light">
    <br><br>
    <br><br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                            <?php
                            require_once("class_PersegiPanjang.php");

                            $PersegiPanjang1 = new PersegiPanjang(8, 9);
                            $PersegiPanjang2 = new PersegiPanjang(2, 7);

                            echo "Luas PersegiPanjang 1 : " . $PersegiPanjang1->luas() . "<br/>";
                            echo "Luas PersegiPanjang 2 : " . $PersegiPanjang2->luas() . "<br/>";
                            echo "<hr/>";
                            echo "Keliling PersegiPanjang 1 : " . $PersegiPanjang1->keliling() . "<br/>";
                            echo "Keliling PersegiPanjang 2 : " . $PersegiPanjang2->keliling() . "<br/>";



                            ?>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

</body>

</html>