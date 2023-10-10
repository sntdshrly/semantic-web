<?php
$src = "data.json";
$content = file_get_contents($src);
$data = json_decode($content, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca file json</title>
</head>

<body>
    <table border="1">
        <thread>
            <h1>Data</h1>
            <th>
                NRP
            </th>
            <th>
                Nama
            </th>
            <th>
                Nomor HP
            </th>
        </thread>
        <tbody>
            <tr>
                <td>
                    <?php echo $data[0]["nrp"]; ?>
                </td>
                <td>
                    <?php echo $data[0]["nama"]; ?>
                </td>
                <td>
                    <?php echo $data[0]["nomorhp"]; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $data[1]["nrp"]; ?>
                </td>
                <td>
                    <?php echo $data[1]["nama"]; ?>
                </td>
                <td>
                    <?php echo $data[1]["nomorhp"]; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>