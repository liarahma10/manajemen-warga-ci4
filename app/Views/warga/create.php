<h2>Tambah Warga</h2>
<form method="post" action="/warga/store">
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="text" name="nik" placeholder="NIK" required><br>
    <textarea name="alamat" placeholder="Alamat" required></textarea><br>
    <input type="date" name="tanggal_lahir" required><br>
    <select name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>
