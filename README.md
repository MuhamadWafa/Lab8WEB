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

### 2. Membuat Program CRUD
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
`http://localhost/lab8_php_databse/`
