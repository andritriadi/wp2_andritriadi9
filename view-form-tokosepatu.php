<html>

<head>
    <title>Form Toko Sepatu</title>
</head>

<body>
    <center>
        <form action="<?= base_url('index.php/tokosepatu/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Toko Sepatu
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
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>No Handphone</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="no" id="no">
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                        <option>Pilih Merk</option>
                        <option>Nike - Rp.375000</option>
                        <option>Adidas - Rp.300000</option>
                        <option>Kickers - Rp.250000</option>
                        <option>Eiger - Rp.275000</option>
                        <option>Bucheri - Rp.400000</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="ukuran" id="ukuran">
                        <option>Pilih Ukuran</option>
                        <option>No. 32</option>
                        <option>No. 33</option>
                        <option>No. 34</option>
                        <option>No. 35</option>
                        <option>No. 36</option>
                        <option>No. 37</option>
                        <option>No. 38</option>
                        <option>No. 39</option>
                        <option>No. 40</option>
                        <option>No. 41</option>
                        <option>No. 42</option>
                        <option>No. 43</option>
                        <option>No. 44</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
