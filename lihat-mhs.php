<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <h1 style="text-align: center">Daftar Mahasiswa Teknik Informatika</h1>

    <a href="index.php">Beranda</a>
    <br>
    <a href="input-mhs.php">Tambah Mahasiswa</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>Asal</th>
            <th>Aksi</th>
        </tr>

        <?php
            include './database/koneksi.php';

            $query = "SELECT * FROM mhs_tb";
            $result = mysqli_query($conn, $query);
            if  (mysqli_num_rows($result) > 0){
                while($data = mysqli_fetch_assoc($result)) {?>
                    <tr>
                        <td><?php echo $data["nim"] ?></td>
                        <td><?php echo $data["nama"] ?></td>
                        <td><?php echo $data["angkatan"] ?></td>
                        <td><?php echo $data["asal"] ?></td>
                        <td>

                            <a href="edit-mhs.php?nim=<?php echo $data["nim"] ?>">edit</a>
                            <a href="delete.php?nim=<?php echo $data["nim"] ?>">delete</a>
                        </td>
                    </tr>
                <?php }
            } else {?> 
                <tr>
                    <td>Tidak Ada Data</td>
                </tr>
            <?php } ?> 
    </table>
</body>
</html>