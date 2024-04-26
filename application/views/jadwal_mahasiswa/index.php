<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jadwal Mahasiswa</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Data Jadwal Mahasiswa</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Nama Ruang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jadwal_mahasiswa as $jadwal) { ?>
                    <tr>
                        <td><?php echo $jadwal['nama_matakuliah']; ?></td>
                        <td><?php echo $jadwal['jam_mulai']; ?></td>
                        <td><?php echo $jadwal['jam_selesai']; ?></td>
                        <td><?php echo $jadwal['nama_ruang']; ?></td>
                        <td>
                            <!-- Tambahkan tombol edit dan hapus dengan link ke fungsi edit dan hapus di controller -->
                            <a href="<?php echo base_url('jadwalmahasiswa/edit/' . $jadwal['id_jadwal_mahasiswa']); ?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo base_url('jadwalmahasiswa/hapus/' . $jadwal['id_jadwal_mahasiswa']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>