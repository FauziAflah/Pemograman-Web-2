<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <style>
        h1 {
           text-align: center;
           font-family: cursive;
           background-color: blanchedalmond;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 2px solid black;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: grey;
        }
    </style>
</head>
<body>
<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>

<h1>Daftar Nilai Siswa</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($ar_nilai as $ns) { ?>
            <tr>
                <td><?= $ns['id'] ?></td>
                <td><?= $ns['nim'] ?></td>
                <td><?= $ns['uts'] ?></td>
                <td><?= $ns['uas'] ?></td>
                <td><?= $ns['tugas'] ?></td>
                <td><?= number_format(($ns['uts']+ $ns['uas'] + $ns['tugas']) / 3, 2) ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table> 
</body>
</html>

