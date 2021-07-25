<html>

<head>
    <title>Data</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            font-family: 'Arial';
            /*font-size: 0.9rem;*/
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

        .text-right {
            text-align: right;
        }

        .text-bold {
            font-weight: bold;
        }

        .row {
            display: flex;
        }

        .col-6 {
            width: 50%;
        }

        .img-center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
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
    <div style="width: 75%; margin: auto;" class="page-1">
        <div>
            <img src="<?= base_url('assets/sanang pemko.png') ?>" alt="alt" class="img-center" style="width: 15rem;" />
        </div>
        <div class="text-center">
            <h3>
                PEMERINTAH GAMPONG COT BA'U
                <br>
                KECAMATAN SUKAJAYA
                <br>
                KOTA SABANG
            </h3>
            Jalan Yos Soedarso Nomor 07 Telp. (0652) 3324200 Kode Pos 23522 Sabang
        </div>
        <hr>
        <hr>
        <div class="text-center">
            <h3>DATA PENDUDUK GAMPONG COT BA'U</h3>
        </div>
        <div class="text-right text-bold" style="margin-right: 10rem;">RT : <?= $rt ?></div>
        <div class="row" style="margin-bottom: 2rem;">
            <div style="width: 75%;">
                <table>
                    <tr>
                        <td>JURONG</td>
                        <td>: <?= $jurong ?></td>
                    </tr>
                    <tr>
                        <td>NOMOR KK</td>
                        <td>: <?= $no_kk ?></td>
                    </tr>
                    <tr>
                        <td>NAMA KEPALA KELUARGA</td>
                        <td>: <?= $nama_kk ?></td>
                    </tr>
                    <tr>
                        <td>STATUS PERKAWINAN</td>
                        <td>: <?= $status_perkawian ?></td>
                    </tr>
                    <!----->
                    <tr style="height: 1rem">
                        <td></td>
                    </tr>

                    <tr>
                        <td>Jumlah Tanggungan</td>
                        <td>: <?= $jumlah_tanggungan ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 3rem">Laki-laki</td>
                        <td>: <?= $jumlah_tanggungan_laki_laki ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 3rem">Perempuan</td>
                        <td>: <?= $jumlah_tanggungan_perempuan ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 3rem">Jumlah Jiwa</td>
                        <td>: <?= $jumlah_tanggungan_jiwa ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 3rem">Keadaan Rumah</td>
                        <td>: <?= $keadaan_rumah ?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 3rem">Kepemilikan Rumah</td>
                        <td width="70%">: <?= $kepemilikan_rumah ?></td>
                    </tr>
                </table>
            </div>
            <div class="text-center" style="width: 25%; margin-top: 5rem;">
                JENIS KELAMIN
                <br>
                <td>: <?= $jenis_kelamin ?></td>
            </div>
        </div>
        <div style="margin-bottom: 10rem">Sejak tahun berapa tinggal di Gampong Cot Ba'u : <?= str_replace("'", '', $sejak_tahun) ?></div>
        <div class="row">
            <div class="text-center" style="width: 50%">
                Diketahui,
                <br>
                Ulee Jurong
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                (..............................................)
            </div>
            <div class="text-center" style="width: 50%">
                Cot Ba'u, ................................20..........
                <br>
                Keuchik Gampong Cot Ba'u
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <b>( ADNAN HASYIM )</b>
            </div>
        </div>
    </div>
    <div class="page-2" style="page-break-before: always;">
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
                        <td class="text-center"><?= $i + 1 ?></td>
                        <td colspan="4"><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->nama : '' ?></td>
                        <td colspan="3"><?= isset($PendudukKeluargas[$i]) ? "{$PendudukKeluargas[$i]->tempat_lahir}, {$PendudukKeluargas[$i]->tanggal_lahir}" : '' ?></td>
                        <td colspan="3"><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->hubungan : '' ?></td>
                        <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->pekerjaan : '' ?></td>
                        <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->agama : '' ?></td>
                        <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->pendidikan_terakhir : '' ?></td>
                        <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->pendidikan_tamat : '' ?></td>
                        <td><?= isset($PendudukKeluargas[$i]) ? $PendudukKeluargas[$i]->suku : '' ?></td>
                        <td colspan="2"><?= isset($PendudukKeluargas[$i]) ? (strlen($PendudukKeluargas[$i]->dimana) > 0 ? $PendudukKeluargas[$i]->dimana : '-') : '' ?></td>
                        <td><?= isset($PendudukKeluargas[$i]) ? (strlen($PendudukKeluargas[$i]->jurusan) > 0 ? $PendudukKeluargas[$i]->jurusan : '-') : '' ?></td>
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
                    <td colspan="3" rowspan="8" class="text-center"><?= implode(', ', array_map(function ($usaha) { return $usaha->rincian; }, $PendudukUsahas)) ?></td>
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
                    <td class="text-center"><?= isset($PendudukTernaks[0]) && $PendudukTernaks[0]->kepemilikan === 'Sendiri' ? '✓' : '' ?></td>
                    <td class="text-center"><?= isset($PendudukTernaks[0]) && $PendudukTernaks[0]->kepemilikan === 'Bantuan' ? '✓' : '' ?></td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td colspan="4"><?= isset($PendudukAnakYatims[1]) ? $PendudukAnakYatims[1]->nama : '' ?></td>
                    <td colspan="3"><?= isset($PendudukAnakYatims[1]) ? $PendudukAnakYatims[1]->nama_ayah : '' ?></td>
                    <td colspan="3"><?= isset($PendudukAnakYatims[1]) ? $PendudukAnakYatims[1]->tahun_meninggal : '' ?></td>
                    <td class="text-center"><?= isset($PendudukTernaks[1]) && $PendudukTernaks[1]->jenis === 'Sapi' ? $PendudukTernaks[1]->jumlah : '' ?></td>
                    <td class="text-center"><?= isset($PendudukTernaks[1]) && $PendudukTernaks[1]->jenis === 'Kambing' ? $PendudukTernaks[1]->jumlah : '' ?></td>
                    <td class="text-center"><?= isset($PendudukTernaks[1]) && $PendudukTernaks[1]->kepemilikan === 'Sendiri' ? '✓' : '' ?></td>
                    <td class="text-center"><?= isset($PendudukTernaks[1]) && $PendudukTernaks[1]->kepemilikan === 'Bantuan' ? '✓' : '' ?></td>
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
                        <div class="row text-center">
                            <div class="col-6">Tanda Tangan Kepala Rumah Tangga</div>
                            <div class="col-6">
                                Pendataan Tanggal, ..................................20........
                                <br>
                                Nama yang Mendata
                            </div>
                        </div>
                        <div class="row text-center" style="margin-top: 40px;">
                            <div class="col-6">
                                (...........................................................)
                                <br>
                                Nama Jelas
                            </div>
                            <div class="col-6">
                                (...........................................................)
                                <br>
                                Nama Jelas
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-12">
                                Keterangan Tambahan
                                <br>
                                * <?= $penduduk_bukan ?> Gampong Cot Ba'u
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
                    <td><?= $roda_tiga > 0 ? $roda_tiga : '-' ?></td>
                    <td><?= $roda_empat > 0 ? $roda_empat : '-' ?></td>
                    <td><?= strpos($listrik, 'PLN') > -1 ? '✓' : '' ?></td>
                    <td colspan="3"><?= strpos($listrik, 'Yang Lain') > -1 ? '✓' : '' ?></td>
                    <td colspan="2"><?= strpos($air, 'PDAM') > -1 ? '✓' : '' ?></td>
                    <td><?= strpos($air, 'Hujan') > -1 ? '✓' : '' ?></td>
                    <td><?= strpos($air, 'Beli') > -1 ? '✓' : '' ?></td>
                </tr>
                <tr>
                    <th colspan="4" rowspan="2" class="text-center">Apakah Dirumah ini ada orang yang Cacat/Lumpuh/Ada/Tidak</th>
                    <th colspan="7" class="text-center">Jelaskan Cacatnya</th>
                    <th class="text-center">Sejak Tahun</th>
                </tr>
                <tr>
                    <td colspan="7" rowspan="" class="text-center">&nbsp;</td>
                    <td rowspan="" class="text-center">&nbsp;</td>
                </tr>

                <tr>
                    <td class="text-center">1</td>
                    <td colspan="3"><?= isset($PendudukCacats[0]) ? $PendudukCacats[0]->nama : '' ?></td>
                    <td colspan="7" rowspan="" class="text-center"><?= isset($PendudukCacats[0]) ? $PendudukCacats[0]->cacat : '' ?></td>
                    <td rowspan="" class="text-center"><?= isset($PendudukCacats[0]) ? $PendudukCacats[0]->sejak_tahun : '' ?></td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td colspan="3"><?= isset($PendudukCacats[1]) ? $PendudukCacats[1]->nama : '' ?></td>
                    <td colspan="7" rowspan="" class="text-center"><?= isset($PendudukCacats[1]) ? $PendudukCacats[1]->cacat : '' ?></td>
                    <td rowspan="" class="text-center"><?= isset($PendudukCacats[1]) ? $PendudukCacats[1]->sejak_tahun : '' ?></td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td colspan="3"><?= isset($PendudukCacats[2]) ? $PendudukCacats[2]->nama : '' ?></td>
                    <td colspan="7" rowspan="" class="text-center"><?= isset($PendudukCacats[2]) ? $PendudukCacats[2]->cacat : '' ?></td>
                    <td rowspan="" class="text-center"><?= isset($PendudukCacats[2]) ? $PendudukCacats[2]->sejak_tahun : '' ?></td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td colspan="3"><?= isset($PendudukCacats[3]) ? $PendudukCacats[3]->nama : '' ?></td>
                    <td colspan="7" rowspan="" class="text-center"><?= isset($PendudukCacats[3]) ? $PendudukCacats[3]->cacat : '' ?></td>
                    <td rowspan="" class="text-center"><?= isset($PendudukCacats[3]) ? $PendudukCacats[3]->sejak_tahun : '' ?></td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td colspan="3"><?= isset($PendudukCacats[4]) ? $PendudukCacats[4]->nama : '' ?></td>
                    <td colspan="7" rowspan="" class="text-center"><?= isset($PendudukCacats[4]) ? $PendudukCacats[4]->cacat : '' ?></td>
                    <td rowspan="" class="text-center"><?= isset($PendudukCacats[4]) ? $PendudukCacats[4]->sejak_tahun : '' ?></td>
                </tr>

                <tr>
                    <th colspan="5" rowspan="2" class="text-center">Apakah Dirumah ini memiliki Jamban</th>
                    <th colspan="2" class="text-center">Ada</th>
                    <th colspan="2" class="text-center">Tidak</th>
                    <th colspan="2" class="text-center">Bersama</th>
                    <td rowspan="" class="text-center">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2"><?= strpos($jamban, 'Ada') > -1 ? '✓' : '' ?></td>
                    <td colspan="2"><?= strpos($jamban, 'Tidak') > -1 ? '✓' : '' ?></td>
                    <td colspan="2"><?= strpos($jamban, 'Bersama') > -1 ? '✓' : '' ?></td>
                    <td rowspan="" class="text-center">&nbsp;</td>
                </tr>


            </tbody>
        </table>
    </div>
</body>

</html>