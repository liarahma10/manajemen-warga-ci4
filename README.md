# Manajemen Warga CI4 

Aplikasi manajemen data warga berbasis web menggunakan **CodeIgniter 4**.
Project ini digunakan untuk mengelola data warga seperti tambah, edit, dan simpan data.

---

##  Teknologi

* PHP (CodeIgniter 4)
* MySQL
* HTML, CSS, JavaScript

---

##  Cara Install

### 1. Clone Repository

```bash id="ci1"
git clone https://github.com/username/manajemen-warga-ci4.git
cd manajemen-warga-ci4
```

---

### 2. Install Dependency

```bash id="ci2"
composer install
```

---

### 3. Konfigurasi Environment

Copy file `env` menjadi `.env`, lalu ubah bagian database:

```env id="ci3"
database.default.hostname = localhost
database.default.database = warga_db
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

---

### 4. Jalankan Project

```bash id="ci4"
php spark serve
```

---

### 5. Akses di Browser

```bash id="ci5"
http://localhost:8080
```

---

##  Fitur

* Tambah data warga
* Form input data
* Validasi data
* Struktur MVC (Model, View, Controller)

---

##  Catatan

* Pastikan MySQL sudah berjalan
* Pastikan database `warga_db` sudah dibuat
* Jangan upload file `.env` ke GitHub

---

##  Author

Lia Rahma Asnaini
