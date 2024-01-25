<!DOCTYPE html
<html langen">

<head>
 <meta charset="UTF-8">
    <meta name="port" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php 
        $data = [
            [
                "no" => 1,
                "gambar" => "gambar1.jpg",
                "nrp" => "12345678",
                "nama" => "John Doe",
                "email" => "john.doe@email.com",
                "jurusan" => "Teknik Informatika"
            ],
            [
                "no" => 2,
                "gambar" => "gambar2.jpg",
                "nrp" => "87654321",
                "nama" => "Jane Doe",
                "email" => "jane.doe@email.com",
                "jurusan" => "Sistem Informasi"
            ]
        ];

        foreach ($data as $item) {
            echo "<tr>";
            echo "<td>" . $item["no"] . "</td>";
            echo "<td></td>"; // Add your action button here
            echo "<td><img src='" . $item["gambar"] . "' alt='Gambar'></td>";
            echo "<td>" . $item["nrp"] . "</td>";
            echo "<td>" . $item["nama"] . "</td>";
            echo "<td>" . $item["email"] . "</td>";
            echo "<td>" . $item["jurusan"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>