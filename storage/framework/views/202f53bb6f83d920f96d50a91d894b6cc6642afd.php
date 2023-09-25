<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
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
            font-weight: bold;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        }
        

        footer {
            background-color: #F8F8FF;
            color: #000;
            font-weight: bold;
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
                        <a class="nav-link active" href="/"><i class="fa-solid fa-house"></i> Beranda</a>
                        <a class="nav-link" href="/peminjaman">Data Peminjaman</a>
                        <a class="nav-link" href="#">Data pengembalian</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container">
            <div class="card">
                <div class="card-header">
                    <h1 align="center">PERPUSTAKAAN JAYA</h1>
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

</html><?php /**PATH C:\laragon\www\crudtegar\resources\views/beranda.blade.php ENDPATH**/ ?>