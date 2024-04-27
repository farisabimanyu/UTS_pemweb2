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
        <h3>Nama: <?php echo $this->session->userdata('nama'); ?></h3>
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <a href="<?php echo base_url('index.php/jadwalmahasiswa/tambah'); ?>" class="btn btn-primary">Tambah</a>
                <a href="<?php echo base_url('index.php/login/logout'); ?>" class="btn btn-secondary">Logout</a>
            </div>
        </div>
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
                            <a href="<?php echo base_url('index.php/jadwalmahasiswa/hapus/' . $jadwal['id_jadwal_mahasiswa']);
                                        ?>" class="btn btn-danger" onclick="return confirm('Apa anda yakin ingin menghapus <?php echo $jadwal['nama_matakuliah'] ?>?');">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>