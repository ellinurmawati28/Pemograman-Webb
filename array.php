<?php
$buah = array("apel","pisang","durian","semangka","pepaya","manggis");
foreach ($buah as $buahan){
    echo $buahan. '<br>';
}
echo "<hr/>";
$siswa  = array("nama" => "Elli","umur" =>  "19", "kota" => "binjai", "jurusan" => "sistem informasi");
echo 'nama siswa :'.$siswa['nama'].'<br/>';
echo 'umur siswa :'.$siswa['umur'].'<br/>';
echo 'kota siswa :'.$siswa['kota'].'<br/>';
echo 'jurusan siswa :'.$siswa['jurusan'].'<br/>';
?>


<table border="1">
<tr>
    <th>nama siswa</th>
    <th>umur siswa</th>
    <th>kota siswa</th>
    <th>jurusan siswa</th>
</tr>
<tr>
    <td><?= $siswa['nama'];?></td>
    <td><?= $siswa['umur'];?></td>
    <td><?= $siswa['kota'];?></td>
    <td><?= $siswa['jurusan'];?></td>

</tr>
</table>