<?php
error_reporting(E_ALL ^ E_WARNING || E_NOTICE);
$data = file_get_contents('https://datasekolahapi.herokuapp.com/api/data');
$sekolah2 = json_decode($data);
//echo "<pra>"; print_r($sekolah2)
$table = "<h1><center>DATA SEKOLAH</center></h1> ";
$table .= " <table border= 1> ";
$table .= " <tr><td>Tidak</td>
				<td>Nama Sd</td>
				<td>NPSN</td>
				<td>Alamat</td>
				<td>Kode Pos</td>
				<td>Desa</td>
				<td>Kecamatan</td>
				<td>Kabupaten</td>
				<td>Provinsi</td>
				<td>Status</td>
				<td>Jenjang</td></tr> ";

for ($i = 0; $i < count($sekolah2->SD->Jakarta->Kepulauan_Seribu); $i++) {
    $no = $i + 1;
    $table .= " <tr>
				<td> {$no}</td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->nama} </td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->npsn} </td>
             	<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->alamat} </td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->kodepos} </td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->desa} </td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->kecamatan} </td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->kabupaten} </td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->provinsi} </td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->status} </td>
				<td> {$sekolah2->SD->Jakarta->Kepulauan_Seribu[$i]->jenjang} </td>
				</tr> ";
}
$table .= " </table> ";
echo  $table;
