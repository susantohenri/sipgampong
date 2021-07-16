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
</head>

<body style="width: 75%; margin: auto;">
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

</body>

</html>