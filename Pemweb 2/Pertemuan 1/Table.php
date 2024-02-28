<?php
$data_arrayhewan = [
    ["Nama" => "Kucing", "warna" => "hitam"], 
    ["Nama" => "Anjing","warna" => "putih"],
    ["nama" => "kelinci", "warna" => "coklat"]
];
?>
<table>
    <tr>
        <td>nama</td>
        <td>warna</td>
    </tr>
    <?php foreach ($data_arrayhewan as $hewan) { ?>
        <tr>
            <td><?= $hewan["nama"]; ?></td>
            <td><?= $hewan["warna"]; ?></td>
        </tr>
        <?php } ?>
</table>