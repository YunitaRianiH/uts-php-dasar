<?php

$mahasiswa = [
    ['nim' => 'D212111002', 'nama' => 'Cahya Julianti', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111004', 'nama' => 'Desi Syifa Fitria', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111006', 'nama' => 'Gita Septiani', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111008', 'nama' => 'Intan Khoirunnisa', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111010', 'nama' => 'Kenia Nurazizah', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111012', 'nama' => 'Puspa Dewi Kusumawati', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111014',	'nama' => 'Rizaldy Muhamad Sopyan', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111016', 'nama' => 'Seli Pebriani', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111018', 'nama' => 'Siti Aminah', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111020', 'nama' => 'Sophia Nurhafshoh Koenady', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111022', 'nama' => 'Yunita Riani', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111026',	'nama' => 'Aura Maliya', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111028',	'nama' => 'Fanisa Tri Agna Fata', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111030',	'nama' => 'Muhammad Reza Andriansyah', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111032',	'nama' => 'Wawan Jefriansyah', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
    ['nim' => 'D212111034',	'nama' => 'Rahmatia', 'jurusan' => 'Komputerisasi Akuntansi', 'angkatan' => '2021', 'nilai' => 'A'],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa NIM Genap</title>
    <style>
        .center {
            text-align:center ;
        }
        .highlight {
            background-color: coral;
        }
     </style>       
</head>
<body>
    <h1 style="text-align: center;">Data Nilai Mahasiswa Komputerisasi Akuntansi - 2021</h1>
    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%;">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
        </tr>
        
        <?php

       $no = 1;
        foreach ($mahasiswa as $mhs) {
           if ($mhs['nim'] === 'D212111022') {
            echo "<tr class= 'highlight'";
           }
           else {
            echo "<tr>";
           }
                echo "<tr>";
                echo "<td class='center'>" . $no++ . "</td>";
                echo "<td class='center'>" . $mhs['nim'] . "</td>";
                echo "<td>" . $mhs['nama'] . "</td>";
                echo "<td>" . $mhs['jurusan'] . " - " . $mhs['angkatan'] . "</td>";
                echo "<td class='center'>" . $mhs['nilai'] . "</td>";
                echo "</tr>";
        }
         ?>
    </table>
</body>
</html>
