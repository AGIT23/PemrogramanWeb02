<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accoun Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-light">
    <?php
    require_once 'class_AccountBank.php';

    $ac1 = new AccountBank("C001", 6000000, "Ahmad");
    $ac2 = new AccountBank("C002", 5350000, "Budi");
    $ac3 = new AccountBank("C003", 2500000, "Kurniawan");

    $ar_ac1 = [$ac1, $ac2, $ac3];

    $acb1 = new AccountBank("C001", 6000000, "Ahmad");
    $acb2 = new AccountBank("C002", 5350000, "Budi");
    $acb3 = new AccountBank("C003", 2500000, "Kurniawan");

    $acb1->deposit(1000000);
    $acb1->transfer($acb3, 1500000);
    $acb1->transfer($acb2, 500000);
    $acb2->witdraw(2500000);

    $ar_ac2 = [$acb1, $acb2, $acb3];

    ?>
    <br /><br>
    < <div class="container-fluid px-5">
        <table class="table table-bordered text-center bg-white">
            <thead>
                <tr>
                    <th>
                        No
                    </th>
                    <th>
                        No.Rekening
                    </th>
                    <th>
                        Customer
                    </th>
                    <th>Saldo</th>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($ar_ac1 as $ac1) {
                ?>
                    <tr>
                        <td>
                            <?= $nomor ?>
                        </td>
                        <td>
                            <?= $ac1->nomor ?>
                        </td>
                        <td>
                            <?= $ac1->customer ?>
                        </td>
                        <td>
                            <?= number_format($ac1->saldo, 0, ",", "."); ?>
                        </td>
                    </tr>
                <?php
                    $nomor++;
                }

                ?>
            </tbody>
        </table>

        <p>Ahmad nabung 1.000.000</p>
        <p>Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi</p>
        <p>Budi tarik uang 2.500.000</p>

        </div>
        <div class="container-fluid px-5">
            <table class="table table-bordered text-center bg-white">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            No.Rekening
                        </th>
                        <th>
                            Customer
                        </th>
                        <th>Saldo</th>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($ar_ac2 as $ac2) {
                    ?>
                        <tr>
                            <td>
                                <?= $nomor ?>
                            </td>
                            <td>
                                <?= $ac2->nomor ?>
                            </td>
                            <td>
                                <?= $ac2->customer ?>
                            </td>
                            <td>
                                <?= number_format($ac2->saldo, 0, ",", "."); ?>
                            </td>
                        </tr>
                    <?php
                        $nomor++;
                    }

                    ?>
                </tbody>
            </table>

        </div>
</body>

</html>