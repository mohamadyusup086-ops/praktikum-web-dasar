<?php
$nama = "Yusup";
$umur = 20;
echo "Nama saya adalah $nama, dan umur saya adalah $umur tahun.";
#percabangan if else
$nilai = 85;
if ($nilai >= 80) {
    echo "Nilai A";
} else {
    echo "Nilai B";
}

#switch case
$hari = "Minggu";
switch ($hari) {
    case "Senin":
        echo "Hari Kerja dimulai";
        break;
    case "Minggu":
        echo "Hari Libur";
        break;
}

#perulangan for
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i <br>";
}

#while
$i = 1;
while ($i <= 5) {
    echo "Perulangan ke-$i <br>";
    $i++;
}

#foreach
$data = ["andi", "budi", "caca"];
foreach ($data as $nama) {
    echo "Nama: $nama <br>";
}

#fungsi dan manipulasi data,fungsi
function data ($nama){
    return "halo $nama";
}
echo data("Yusup");

#fungsi dan parameter
function tambah($a, $b){
    return $a + $b;
}
echo tambah(5, 3);

#manipulasi string
$teks = "Hello indonesia";
echo strtoupper($teks); // Output: HELLO INDONESIA
echo strtolower($teks); // Output: hello indonesia
echo strlen($teks); // Output: 16
echo str_replace("indonesia", "dunia", $teks); // Output: Hello dunia

#manipulasi array
$data = [1, 2, 3, 4, 5];
array_push($data,"C: "); 
echo count($data); //jumlah data

#implementasi dan visualisasi data
$users = ["Andi", "Budi", "Citra"];
?>

<ul>
<?php foreach ($users as $user): ?>
    <li><?= $user ?></li>
<?php endforeach; ?>
</ul>

#menampilkan data dalam bentuk tabel
$data = [
    ["Nama" => "Andi", "Umur" => 25],
    ["Nama" => "Budi", "Umur" => 30],
    ["Nama" => "Citra", "Umur" => 22]
];

#menampilkan total data
echo "Total data: " . count($data); 