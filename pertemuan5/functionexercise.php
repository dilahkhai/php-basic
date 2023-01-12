<?php
echo "<h1>CASE 1</h1>";
echo "<h4>Data nama dan usia siswa</h4>";
###########################
# Study case menghitung umur menggunakan function
###########################
function hitung_umur($thn_lahir){
    $umur = date('Y') - $thn_lahir;
    return $umur;
}
/* echo "Umur saya adalah " . hitung_umur(2006). " tahun";
 echo "<br>";
 echo "<hr>";*/

#memanggil function dalam function
function biodata ($nama , $umur)
{
     echo "Nama: " . $nama .  "<br>";
     echo "Usia: ". hitung_umur($umur). " tahun". "<br>";
}
biodata("Haikal", "2000" );
echo "<br>";
biodata("Kyle", "2002" );
echo "<br>";
biodata("Sam", "2003" );
echo "<br>";
biodata("Justin", "2004" );
echo "<br>";
biodata("Jun", "2000" );


echo "<br>";
echo "<hr>";


echo "<h1>CASE 2</h1>";
echo "<h4>Menghitung gaji pegawai termasuk tunjangannya</h4>";
###########################
# Study case menghitung gaji menggunakan function
###########################
function hitung_gaji($pekerjaan, $gaji, $tunjangan){
    if ($tunjangan == 0){
         return $gaji;
    } else {
        return $gaji + ($gaji * ($tunjangan/100));
    }
}

// memanggil function hitung_gaji()
$gaji1 = hitung_gaji("manajer utama", 15000000, 40);
$gaji2 = hitung_gaji("direktur", 20000000, 40);
$gaji3 = hitung_gaji("office b/g", 3000000, 50);

// menampilkan hasil perkalian
echo "Gaji Manager : " . $gaji1 . "<br>";
echo "Gaji Direktur : " . $gaji2 . "<br>";
echo "Gaji Office B/G : " . $gaji3. "<br>"; 


echo "<br>";
echo "<hr>";


echo "<h1>CASE 3</h1>";
echo "<h4>Menampilkan data dari buku</h4>";
###########################
# Study case menampilkan tanggal lahir siswi menggunakan function
###########################
function databuku ($judul, $penulis, $penerbit, $tahunTerbit)
{
     echo "Judul buku: " . $judul .  "<br>";
     echo "Penulis: ". $penulis. "<br>";
     echo "Penerbit: ". $penerbit. "<br>";
     echo "Tahun terbit: ". $tahunTerbit. "<br>";

}

databuku("Jakarta Seblum Pagi", "Ziggy Zezsyazeoviennazabrizkie
", "Gramedia Pustaka Utama", "2016");
echo "<br>";
databuku("Laut bercerita", "Leila S. Chudori", "Kepustakaan Populer Gramedia", "2017");
echo "<br>";
databuku("Siri'", "Asmayani Kusrini", "Mekar Cipta Lestari", "2020");
echo "<br>";
databuku("Gadis Kretek", "Ratih Kumala", "Granedia Pustaka Utama", "2012");
echo "<br>";
databuku("Perempuan yang menangis pada Bulan Hitam", "Dian Purnama", "Granedia Pustaka Utama", "2020");

?>
