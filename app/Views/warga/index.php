<h2>Data Warga</h2>
<a href="/warga/create">Tambah Warga</a>
<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($warga as $key => $row): ?>
    <tr>
        <td><?= $key + 1 ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['umur'] ?></td>
        <td>
            <a href="/warga/edit/<?= $row['id'] ?>">Edit</a> |
            <a href="/warga/delete/<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
