<?php
require_once "connection.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div id="interactive-background">
    <?php
    $query = "SELECT * FROM tbmahasiswa";
    $result = $mysqli->query($query);

    if ($result) {

        if ($result->num_rows > 0) {
            echo "<h1>Daftar Mahasiswa</h1>";
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Nama</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["idmahasiswa"] . "</td>";
                echo "<td>" . $row["namamahasiswa"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Tidak ada data mahasiswa.";
        }

        $result->free();
    } else {
        echo "Error: " . $mysqli->error;
    }

    $mysqli->close();
    ?>
    </div>
</body>
<script src="script.js"></script>
</html>