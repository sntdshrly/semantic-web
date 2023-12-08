<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca file xml</title>
</head>

<body>
    <table border="1">
        <h1>Data</h1>
        <thread>
            <th>NRP</th>
            <th>Nama</th>
            <th>Alamat</th>
        </thread>
        <tbody>
            <?php
            $src = "data.xml";
            $content = file_get_contents($src);
            $xml = simplexml_load_string($content);
            foreach ($xml as $mahasiswa) {
            ?>
                <tr>
                    <td>
                        <?php echo $mahasiswa->nrp; ?>
                    </td>
                    <td>
                        <?php echo $mahasiswa->nama; ?>
                    </td>
                    <td>
                        <?php echo $mahasiswa->alamat; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>