<h2>Edit Warga</h2>
<form method="post" action="/warga/update/<?= $warga['id'] ?>">
    <input type="text" name="nama" value="<?= esc($warga['nama']) ?>" required><br>
    <input type="text" name="nik" value="<?= esc($warga['nik']) ?>" required><br>
    <textarea name="alamat" required><?= esc($warga['alamat']) ?></textarea><br>
    <input type="date" name="tanggal_lahir" value="<?= $warga['tanggal_lahir'] ?>" required><br>
    <select name="jenis_kelamin">
        <option value="Laki-laki" <?= $warga['jenis_kelamin']=='Laki-laki'?'selected':'' ?>>Laki-laki</option>
        <option value="Perempuan" <?= $warga['jenis_kelamin']=='Perempuan'?'selected':'' ?>>Perempuan</option>
    </select><br>
    <button type="submit">Update</button>
</form>
