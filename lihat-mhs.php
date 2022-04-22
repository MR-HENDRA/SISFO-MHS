<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    
    <h1 style="text-align: center">Daftar Mahasiswa</h1>

    <a href="index.php">beranda</a>
    <br>
    <a href="input-mhs.php">tambah mahasiswa</a>
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
                            <button>hapus</button>
                            <a href="edit-mhs.php?nim=<?php echo $data["nim"] ?>">edit</a>
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