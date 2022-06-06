<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php //echo"<pre>"; print_r($list_mhs); echo"<pre>";?> -->
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>GENDER</th>
                <th>IPK</th>
                <th>PREDIKAT</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($list_mhs as $row):?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $row->nim?></td>
                <td><?= $row->nama?></td>
                <td><?= $row->gender?></td>
                <td><?= $row->ipk?></td>
                <td><?= $row->predikat()?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>