<?php
$array = [
    [
        "nama" => "Rosalie Naurah",
        "gender" => "Perempuan",
        "umur" => 20,
        "bb" => 46,
        "tb" => 155,
        "bmi" => "18.5",
        "ket" => "Normal (ideal)"
    ],
    [
        "nama" => "Rara Wulan",
        "gender" => "Perempuan",
        "umur" => 21,
        "bb" => 50,
        "tb" => 160,
        "bmi" => "19.5",
        "ket" => "Normal (ideal)"
    ],
    [
        "nama" => "Giagah Putih",
        "gender" => "Laki-laki",
        "umur" => 22,
        "bb" => 60,
        "tb" => 165,
        "bmi" => "21.8",
        "ket" => "Normal (ideal)"
    ]
];

// Class BMI
class BMI
{
    public static function hitungBMI($beratbadan, $tinggibadan)
    {
        return $beratbadan / pow(($tinggibadan / 100), 2);
    }

    public static function statusBMI($bmi, $umur)
    {
        if ($umur >= 18) {
            if ($bmi < 18.5) {
                return 'Kurus';
            } else if ($bmi >= 18.5 && $bmi < 24.9) {
                return 'Normal (ideal)';
            } else if ($bmi >= 24.9 && $bmi < 29.9) {
                return 'Berlebih';
            } else if ($bmi >= 29.9) {
                return 'Obesitas';
            }
        } else {
            return 'BMI tidak dapat dihitung untuk usia di bawah 18 tahun.';
        }
    }
}

// Inisialisasi variabel bmi dan keterangan
$bmi ="";
$keterangan ="";


// Periksa apakah tombol submit ditekan
if (isset($_POST['submit'])) {
    // Hitung BMI
    $nama = $_POST['nama'];
    $beratbadan = $_POST['beratbadan'];
    $tinggibadan = $_POST['tinggibadan'];
    $umur = $_POST['umur'];
    $jeniskelamin = $_POST['kelamin'];

    $bmi = "";
    $keterangan = "";

    // Menghitung BMI
    $bmi = BMI::hitungBMI($beratbadan, $tinggibadan);
    // Menetapkan keterangan berdasarkan nilai BMI
    $keterangan = BMI::statusBMI($bmi, $umur);

    // Tambahkan data baru ke dalam array
    $array[] = [
        "nama" => $nama,
        "gender" => $jeniskelamin,
        "umur" => $umur,
        "bb" => $beratbadan,
        "tb" => $tinggibadan,
        "bmi" => $bmi,
        "ket" => $keterangan
    ];
}
/**
 * Buat sebuah class dengan nama BMI
 * class tersebut memiliki method hitungBMI dan statusBMI
 * selanjutnya buat form upload
 * 
 */

?>

<h2>Data BMI</h2>
<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Berat Badan (KG)</th>
            <th>Tinggi Badan (CM)</th>
            <th>BMI</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($array as $data) { ?>
            <tr>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['gender'] ?></td>
                <td><?= $data['umur']; ?></td>
                <td><?= $data['bb']; ?></td>
                <td><?= $data['tb']; ?></td>
                <td><?= $data['bmi'] ?></td>
                <td><?= $data['ket']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>