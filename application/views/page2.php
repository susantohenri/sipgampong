<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        * {
            font-family: 'Arial';
            font-size: 0.9rem;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table.table,
        .table th,
        .table td {
            border: 1px solid black;
        }

        th {
            padding: 5px;
        }

        td {
            height: 10px;
            min-width: 50px;
            padding: 5px;
        }

        .text-center {
            text-align: center;
        }

        .bg-yellow {
            background-color: yellow;
        }

        .bg-blue {
            background-color: #4eb1f3;
        }

        .bg-blue-1 {
            background-color: #c8e7fc;
        }

        .row {
            display: flex;
        }

        .col-6 {
            width: 50%;
        }

        .note {
            width: 600px;
        }

        .bold {
            font-weight: bold;
        }

        .mt {
            margin-top: 70px;
        }
    </style>
</head>

<body>
    <h3>SUSUNAN KELUARGA DAN TANGGUNGAN</h3>
    <table class="table">
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2" colspan="4">Nama</th>
                <th rowspan="2" colspan="3">Tempat/Tagl. Lahir</th>
                <th rowspan="2" colspan="3">Hubungan dengan Kepala Keluarga</th>
                <th rowspan="2">Pekerjaan</th>
                <th rowspan="2">Agama</th>
                <th rowspan="2">Pendidikan Terakhir</th>
                <th rowspan="">Tamat</th>
                <th rowspan="2">Suku</th>
                <th rowspan="2" colspan="2">Kalau Masih Melanjutkan Pendidikan Dimana</th>
                <th rowspan="2">Jurusan</th>
            </tr>
            <tr>
                <th>Tidak</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < 15; $i++) : ?>
                <tr>
                    <td class="text-center"><?= $i+1 ?></td>
                    <td colspan="4"><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->nama : '' ?></td>
                    <td colspan="3"><?= isset($PendudukKeluargas[$i]) ? "{$PendudukKeluargas[$i]->tempat_lahir}, {$PendudukKeluargas[$i]->tanggal_lahir}" : '' ?></td>
                    <td colspan="3"><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->hubungan : '' ?></td>
                    <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->pekerjaan : '' ?></td>
                    <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->agama : '' ?></td>
                    <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->pendidikan_terakhir : '' ?></td>
                    <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->pendidikan_tamat : '' ?></td>
                    <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->suku : '' ?></td>
                    <td colspan="2"><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->dimana : '' ?></td>
                    <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->jurusan : '' ?></td>
                </tr>
            <?php endfor ?>

            <tr>
                <th colspan="5">Apakah dirumah ini ada anak yatim: <br> Ada / Tidak</th>
                <th colspan="3">Nama Ayah</th>
                <th colspan="3">Tahun Berapa Almarhum</th>
                <th>Bertempat</th>
                <th colspan="3">Apakah pemilik rumah ada membuka usaha, kalau ada jelaskan dengan rinci</th>
                <th colspan="2">Apakah pemilik rumah ini ada pemeliharaan Sapi/Kambing</th>
                <th colspan="2">Kepemilikan Ternak</th>
            </tr>

            <tr>
                <th class="text-center">No.</th>
                <th class="text-center" colspan="4">Nama</th>
                <td colspan="3"></td>
                <td colspan="3"></td>
                <td rowspan="3" class="text-center"><?= isset($PendudukAnakYatims[0]) ? $PendudukAnakYatims[0]->tempat_meninggal : '' ?></td>
                <td colspan="3" rowspan="8" class="text-center"><?= isset($PendudukUsahas[0]) ? $PendudukUsahas[0]->rincian : '' ?></td>
                <th class="text-center">Jml. Sapi</th>
                <th class="text-center">Jml. Kambing</th>
                <th class="text-center">Sendiri</th>
                <th class="text-center">Bantuan</th>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td colspan="4"><?= isset($PendudukAnakYatims[0]) ? $PendudukAnakYatims[0]->nama : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[0]) ? $PendudukAnakYatims[0]->nama_ayah : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[0]) ? $PendudukAnakYatims[0]->tahun_meninggal : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[0]) && $PendudukTernaks[0]->jenis === 'Sapi' ? $PendudukTernaks[0]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[0]) && $PendudukTernaks[0]->jenis === 'Kambing' ? $PendudukTernaks[0]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[0]) && $PendudukTernaks[0]->kepemilikan === 'Sendiri' ? 'Ya' : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[0]) && $PendudukTernaks[0]->kepemilikan === 'Bantuan' ? 'Ya' : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td colspan="4"><?= isset($PendudukAnakYatims[1]) ? $PendudukAnakYatims[1]->nama : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[1]) ? $PendudukAnakYatims[1]->nama_ayah : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[1]) ? $PendudukAnakYatims[1]->tahun_meninggal : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[1]) && $PendudukTernaks[1]->jenis === 'Sapi' ? $PendudukTernaks[1]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[1]) && $PendudukTernaks[1]->jenis === 'Kambing' ? $PendudukTernaks[1]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[1]) && $PendudukTernaks[1]->kepemilikan === 'Sendiri' ? 'Ya' : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[1]) && $PendudukTernaks[1]->kepemilikan === 'Bantuan' ? 'Ya' : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td colspan="4"><?= isset($PendudukAnakYatims[2]) ? $PendudukAnakYatims[2]->nama : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[2]) ? $PendudukAnakYatims[2]->nama_ayah : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[2]) ? $PendudukAnakYatims[2]->tahun_meninggal : '' ?></td>
                <td class="text-center">Sebab Meninggal</td>
                <td class="text-center"><?= isset($PendudukTernaks[2]) && $PendudukTernaks[2]->jenis === 'Sapi' ? $PendudukTernaks[2]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[2]) && $PendudukTernaks[2]->jenis === 'Kambing' ? $PendudukTernaks[2]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[2]) && $PendudukTernaks[2]->kepemilikan === 'Sendiri' ? 'Ya' : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[2]) && $PendudukTernaks[2]->kepemilikan === 'Bantuan' ? 'Ya' : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td colspan="4"><?= isset($PendudukAnakYatims[3]) ? $PendudukAnakYatims[3]->nama : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[3]) ? $PendudukAnakYatims[3]->nama_ayah : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[3]) ? $PendudukAnakYatims[3]->tahun_meninggal : '' ?></td>
                <td rowspan="4" class="text-center"><?= isset($PendudukAnakYatims[0]) ? $PendudukAnakYatims[0]->sebab_meninggal : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[3]) && $PendudukTernaks[3]->jenis === 'Sapi' ? $PendudukTernaks[3]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[3]) && $PendudukTernaks[3]->jenis === 'Kambing' ? $PendudukTernaks[3]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[3]) && $PendudukTernaks[3]->kepemilikan === 'Sendiri' ? 'Ya' : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[3]) && $PendudukTernaks[3]->kepemilikan === 'Bantuan' ? 'Ya' : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td colspan="4"><?= isset($PendudukAnakYatims[4]) ? $PendudukAnakYatims[4]->nama : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[4]) ? $PendudukAnakYatims[4]->nama_ayah : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[4]) ? $PendudukAnakYatims[4]->tahun_meninggal : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[4]) && $PendudukTernaks[4]->jenis === 'Sapi' ? $PendudukTernaks[4]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[4]) && $PendudukTernaks[4]->jenis === 'Kambing' ? $PendudukTernaks[4]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[4]) && $PendudukTernaks[4]->kepemilikan === 'Sendiri' ? 'Ya' : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[4]) && $PendudukTernaks[4]->kepemilikan === 'Bantuan' ? 'Ya' : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">6</td>
                <td colspan="4"><?= isset($PendudukAnakYatims[5]) ? $PendudukAnakYatims[5]->nama : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[5]) ? $PendudukAnakYatims[5]->nama_ayah : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[5]) ? $PendudukAnakYatims[5]->tahun_meninggal : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[5]) && $PendudukTernaks[5]->jenis === 'Sapi' ? $PendudukTernaks[5]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[5]) && $PendudukTernaks[5]->jenis === 'Kambing' ? $PendudukTernaks[5]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[5]) && $PendudukTernaks[5]->kepemilikan === 'Sendiri' ? 'Ya' : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[5]) && $PendudukTernaks[5]->kepemilikan === 'Bantuan' ? 'Ya' : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">7</td>
                <td colspan="4"><?= isset($PendudukAnakYatims[6]) ? $PendudukAnakYatims[6]->nama : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[6]) ? $PendudukAnakYatims[6]->nama_ayah : '' ?></td>
                <td colspan="3"><?= isset($PendudukAnakYatims[6]) ? $PendudukAnakYatims[6]->tahun_meninggal : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[6]) && $PendudukTernaks[6]->jenis === 'Sapi' ? $PendudukTernaks[6]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[6]) && $PendudukTernaks[6]->jenis === 'Kambing' ? $PendudukTernaks[6]->jumlah : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[6]) && $PendudukTernaks[6]->kepemilikan === 'Sendiri' ? 'Ya' : '' ?></td>
                <td class="text-center"><?= isset($PendudukTernaks[6]) && $PendudukTernaks[6]->kepemilikan === 'Bantuan' ? 'Ya' : '' ?></td>
            </tr>

            <tr>
                <th colspan="4" class="text-center">Apakah Dirumah ini ada memiliki kendaraan Roda Dua/Tiga/Empat</th>
                <th colspan="4" class="text-center">Penggunaan Lampu, PLN/Lainnya</th>
                <th colspan="4" class="text-center">Penggunaan Air/PDAM/Air Hujan/Beli</th>
                <td colspan="7" rowspan="12">
                    <div class="row">
                        <div class="col-6" style="padding: 10px;">
                            <div class="text-center">
                                Tanda Tangan Kepala Rumah Tangga
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                (...........................................................)
                                <br>
                                Nama Jelas
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                            Keterangan Tambahan
                            <br>
                            * Bukan Penduduk Gampong Cot Ba'u
                        </div>
                        <div class="col-6" style="padding: 10px;">
                            <div style="text-align: right;">Pendataan Tanggal, ..................................20........</div>
                            <div class="text-center">
                                Nama yang Mendata
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                (...........................................................)
                                <br>
                                Nama Jelas
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th class="text-center" colspan="2">Roda Dua Unit</th>
                <th class="text-center">Roda Tiga Unit</th>
                <th class="text-center">Roda Empat Unit</th>
                <th class="text-center">PLN</th>
                <th class="text-center" colspan="3">Yang Lain</th>
                <th class="text-center" colspan="2">PDAM</th>
                <th class="text-center">Air Hujan</th>
                <th class="text-center">Beli</th>
            </tr>
            <tr>
                <td colspan="2"><?= $roda_dua > 0 ? $roda_dua : '' ?></td>
                <td><?= $roda_tiga > 0 ? $roda_tiga : '' ?></td>
                <td><?= $roda_empat > 0 ? $roda_empat : '' ?></td>
                <td><?= strpos($Penduduk['listrik'], 'PLN') > -1 ? 'Ya' : '' ?></td>
                <td colspan="3"><?= strpos($Penduduk['listrik'], 'Yang Lain') > -1 ? 'Ya' : '' ?></td>
                <td colspan="2"><?= strpos($Penduduk['air'], 'PDAM') > -1 ? 'Ya' : '' ?></td>
                <td><?= strpos($Penduduk['air'], 'Hujan') > -1 ? 'Ya' : '' ?></td>
                <td><?= strpos($Penduduk['air'], 'Beli') > -1 ? 'Ya' : '' ?></td>
            </tr>
            <tr>
                <th colspan="4" rowspan="2" class="text-center">Apakah Dirumah ini ada orang yang Cacat/Lumpuh/Ada/Tidak</th>
                <th colspan="7" class="text-center">Jelaskan Cacatnya</th>
                <th class="text-center">Sejak Tahun</th>
            </tr>
            <tr>
                <td colspan="7" rowspan="6" class="text-center"><?= isset($PendudukCacats[0]) ? $PendudukCacats[0]->cacat : '' ?></td>
                <td rowspan="8" class="text-center"><?= isset($PendudukCacats[0]) ? $PendudukCacats[0]->sejak_tahun : '' ?></td>
            </tr>

            <tr>
                <td class="text-center">1</td>
                <td colspan="3"><?= isset($PendudukCacats[0]) ? $PendudukCacats[0]->nama : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">2</td>
                <td colspan="3"><?= isset($PendudukCacats[1]) ? $PendudukCacats[1]->nama : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">3</td>
                <td colspan="3"><?= isset($PendudukCacats[2]) ? $PendudukCacats[2]->nama : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">4</td>
                <td colspan="3"><?= isset($PendudukCacats[3]) ? $PendudukCacats[3]->nama : '' ?></td>
            </tr>
            <tr>
                <td class="text-center">5</td>
                <td colspan="3"><?= isset($PendudukCacats[4]) ? $PendudukCacats[4]->nama : '' ?></td>
            </tr>

            <tr>
                <th colspan="5" rowspan="2" class="text-center">Apakah Dirumah ini memiliki Jamban</th>
                <th colspan="2" class="text-center">Ada</th>
                <th colspan="2" class="text-center">Tidak</th>
                <th colspan="2" class="text-center">Bersama</th>
            </tr>
            <tr>
                <td colspan="2"><?= strpos($Penduduk['jamban'], 'Ada') > -1 ? 'Ya' : '' ?></td>
                <td colspan="2"><?= strpos($Penduduk['jamban'], 'Tidak') > -1 ? 'Ya' : '' ?></td>
                <td colspan="2"><?= strpos($Penduduk['jamban'], 'Bersama') > -1 ? 'Ya' : '' ?></td>
            </tr>


        </tbody>
    </table>
</body>

</html>