<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Mahasiswa</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Tambah Jadwal Mahasiswa</h2>
        <form action="<?php echo base_url('jadwalmahasiswa/simpan'); ?>" method="post">
            <div class="form-group">
                <label for="id_matakuliah">Mata Kuliah</label>
                <select class="form-control" id="id_matakuliah" name="id_matakuliah" required>
                    <option value="">Pilih Mata Kuliah</option>
                    <?php foreach ($jadwal as $data) { ?>
                        <option value="<?php echo $data['id_matakuliah']; ?>"><?php echo $data['nama_matakuliah']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>