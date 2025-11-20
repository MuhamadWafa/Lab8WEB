# Lab8WEB
# Muhamad Wafa Mufida Zulfi
# 312410334
# TI.24. A4
# Pemograman Web
# Agung Nugroho, S.Kom., M.Kom.

# Tugas

<img width="914" height="275" alt="Cuplikan layar 2025-11-20 143419" src="https://github.com/user-attachments/assets/7aae5a47-69cf-417c-8e59-66a4297244c1" />

## 1. membuat database di XAMPP
Buka Aplikasi XAMPP lalu pergi ke `phpmyadmin` 
masukan sql
```python
CREATE TABLE data_barang (
id_barang int(10) auto_increment Primary Key,
kategori varchar(30),
nama varchar(30),
gambar varchar(100),
harga_beli decimal(10,0),
harga_jual decimal(10,0),
stok int(4)
);
```
Setelah Membuat `CREATE TABLE` Lalu Tambahkan data dengan kode:
```python
INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok)
VALUES ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5),
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5),
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);
```
### hasilnya

<img width="953" height="528" alt="image" src="https://github.com/user-attachments/assets/4df52457-9c7d-4b7a-8607-d63e01865894" />

## 2. Membuat Program CRUD
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
`http://localhost/lab8_php_databse/`
kode `index.php`
```python 
<?php
include("koneksi.php");

// Query untuk menampilkan data
$sql = "SELECT * FROM data_barang";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>

        <!-- Tombol Tambah Data -->
        <a href="tambah.php" class="btn-tambah">+ Tambah Barang</a>

        <div class="main">
            <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                <?php if ($result && mysqli_num_rows($result) > 0): ?>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td>
                                <img src="gambar/<?= $row['gambar']; ?>" 
                                     alt="<?= $row['nama']; ?>" width="100">
                            </td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['kategori']; ?></td>
                            <td><?= $row['harga_jual']; ?></td>
                            <td><?= $row['harga_beli']; ?></td>
                            <td><?= $row['stok']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id_barang']; ?>">Edit</a> |
                                <a href="hapus.php?id=<?= $row['id_barang']; ?>" 
                                   onclick="return confirm('Yakin ingin menghapus?')">
                                   Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">Belum ada data</td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>
```
di tambah dengan kode `koneksi.php`
```python
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
} #else echo "Koneksi berhasil";
?>
```
Lalu tinggal tambah gambar handphone yang sesuai nama file `jpg`
### hasilnya

<img width="953" height="541" alt="image" src="https://github.com/user-attachments/assets/28f54da7-63af-4bd0-b0bc-3e24bffffe9e" />
