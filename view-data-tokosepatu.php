<html>

<head>
    <title>Tampil Data Toko Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Toko Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>No. Handphone</td>
                <td>:</td>
                <td>
                    <?= $no; ?>
                </td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <td>Ukuran Sepatu</td>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('index.php/tokosepatu'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>