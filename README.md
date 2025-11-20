# Lab8WEB
# Muhamad Wafa Mufida Zulfi
# 312410334
# TI.24. A4
# Pemograman Web
# Agung Nugroho, S.Kom., M.Kom.

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
