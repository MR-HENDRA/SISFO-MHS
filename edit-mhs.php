<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
        <?php
            include './database/koneksi.php';
            if(!isset($_GET['nim'])){
                header('Location: lihat-mhs.php');
            }
            $query = "SELECT * FROM mhs_tb WHERE nim = '$_GET[nim]'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0){
                $data = mysqli_fetch_assoc($result);
            }
        ?>
    <form action="proses-update.php" method="POST">

        <input type="text" name="nim" value="<?php echo $data['nim']; ?>" hidden="True">
        
        <label>Nama</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
        <br>
        <label>Angkatan</label>
        <br>
        <input type="text" name="angkatan" value="<?php echo $data['angkatan']; ?>">
        <br>
        <label>Asal</label>
        <br>
        <input type="text" name="asal" value="<?php echo $data['asal']; ?>">
        <br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>