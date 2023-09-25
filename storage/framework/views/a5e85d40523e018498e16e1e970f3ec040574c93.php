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
            position: fixed;
            bottom: 0;
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
                <img class="navbar-brand" src="img/logo_perpus.png" width="170px" alt="">
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
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2>DATA PEMINJAMAN <i class="fa-solid fa-book"></i></h2>
                    <a href="/peminjaman/create"><button type="button" class="btn btn-success ml-auto">Tambah Data <i class="fa-solid fa-plus"></i></button></a>
                </div>
                <div class="card-body">
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#id</th>
                                    <th scope="col">Tanggal peminjaman</th>
                                    <th scope="col">Nama buku</th>
                                    <th scope="col">Nama peminjam</th>
                                    <th scope="col">Kelas & Jurusan</th>
                                    <th scope="col">jenis kelamin</th>
                                    <th scope="col">Pengisi data</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $pinjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($p->id); ?></td>
                                    <td scope="row"><?php echo e($p->tanggal); ?></td>
                                    <td scope="row"><?php echo e($p->nama_buku); ?></td>
                                    <td scope="row"><?php echo e($p->nama_peminjam); ?></td>
                                    <td scope="row"><?php echo e($p->kelas_jurusan); ?></td>
                                    <td scope="row"><?php echo e($p->jenis_kelamin); ?></td>
                                    <td scope="row"><?php echo e($p->pengisi_data); ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                        <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
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

</html><?php /**PATH C:\laragon\www\crudtegar\resources\views/peminjaman.blade.php ENDPATH**/ ?>