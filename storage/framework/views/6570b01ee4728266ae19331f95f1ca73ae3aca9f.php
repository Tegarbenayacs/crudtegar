<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Barlow', sans-serif;
        }

        .navbar {
            background-color: #F8F8FF;
            color: #fff;
            font-weight: 500;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #F8F8FF;
            color: #000;
            font-weight: 500;
            padding: 10px 0;
            text-align: center;
            width: 100%;
            box-shadow: 0px -2px 4px rgba(0, 0, 0, 0.2);
        }

        main {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img class="navbar-brand" src="../img/logo_perpus.png" width="170px" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/"><i class="fa-solid fa-house"></i> Beranda</a>
                        <a class="nav-link active" href="/peminjaman">Data Peminjaman</a>
                        <a class="nav-link" href="#">Data pengembalian</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3"> 
                    <div class="form">
                        <form method="POST" action="/peminjaman/<?php echo e($peminjaman->id); ?>">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <h2>Edit Data</h2>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo e($peminjaman->tanggal); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama_buku" class="form-label">Nama Buku</label>
                                <input type="text" class="form-control" id="nama_buku" name="nama_buku" value="<?php echo e($peminjaman->nama_buku); ?>">
                            </div>  
                            <div class="mb-3">
                                <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                                <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" value="<?php echo e($peminjaman->nama_peminjam); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kelas_jurusan" class="form-label">Kelas Jurusan</label>
                                <input type="text" class="form-control" id="kelas_jurusan" name="kelas_jurusan" value="<?php echo e($peminjaman->kelas_jurusan); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="laki-laki" <?php if($peminjaman->jenis_kelamin == "laki-laki"): ?> selected <?php endif; ?> >Laki-laki</option>
                                    <option value="perempuan" <?php if($peminjaman->jenis_kelamin == "perempuan"): ?> selected <?php endif; ?> >Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pengisi_data" class="form-label">Pengisi Data</label>
                                <select class="form-select" id="pengisi_data" name="pengisi_data">
                                    <option value="Tegar" <?php if($peminjaman->pengisi_data == "Tegar"): ?> selected <?php endif; ?>>Tegar</option>
                                    <option value="Alfian" <?php if($peminjaman->pengisi_data == "Alfian"): ?> selected <?php endif; ?>>Alfian</option>
                                    <option value="Iffan" <?php if($peminjaman->pengisi_data == "Iffan"): ?> selected <?php endif; ?>>Iffan</option>
                                    <option value="Darell" <?php if($peminjaman->pengisi_data == "Darell"): ?> selected <?php endif; ?>>Darell</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" value="update" class="btn btn-warning">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Tegar Benaya. PERPUSTAKAAN JAYA.</p>
        </div>
    </footer>



    <script src="https://kit.fontawesome.com/61dd260dcf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\laragon\www\crudtegar\resources\views/peminjaman/edit.blade.php ENDPATH**/ ?>