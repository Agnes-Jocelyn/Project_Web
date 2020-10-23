<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Input Medicine | The Utopia</title>
	</head>
	<body>
		<header>
            <div class="container">
                <input type="checkbox" name="" id="check">
                
                <div class="logo-container">
                    <h3 class="logo"><span>The </span>Utopia</h3>
                </div>

                <div class="nav-btn">
                    <div class="nav-links">
                        <ul>
                            <li class="nav-link" style="--i: .6s">
                                <a href="index-crud.php">Home</a>
                            </li>
                            <li class="nav-link" style="--i: .85s">
                                <a href="Penyakit-crud.php">Disease</a>
                            </li>
                            <li class="nav-link" style="--i: 1.1s">
                                <a href="Obat-crud.php">Medicine</a>
                            </li>
                            <li class="nav-link" style="--i: 1.35s">
                                <a href="Pembelian-crud.php">Purchase</a>
                            </li>
                        </ul>
                    </div>

                    <div class="log-sign" style="--i: 1.8s">
                        <a href="Login.php" class="btn solid">Log out</a>
                    </div>
                </div>

                <div class="hamburger-menu-container">
                    <div class="hamburger-menu">
                        <div></div>
                    </div>
                </div>
            </div>
        </header>

		<div class="container-isi">
			<div class="row justify-content-center mt-2 mb-2">
				<div class="card" style="padding:15px;">	
					<form action="sc_Obat-crud.php" method="POST">
						<div class="form-group">
							<label>Kode Obat</label>
							<input type="text" class="form-control" name="KD_Obat" placeholder="O0000">
						</div>
						<div class="form-group">
							<label>Nama Obat</label>
							<input type="text" class="form-control" name="Nama_Obat" placeholder="Nama Obat">
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="number" class="form-control" name="Harga" placeholder="Rp. 0">
						</div>
						<div class="form-group">
							<label>Deskripsi Obat</label>
							<textarea name="Deskripsi" class="form-control" cols="50" rows="3" placeholder="Deskripsi Obat"></textarea>
						</div>
						<div class="form-group">
							<label>Stok Barang</label>
							<input type="number" class="form-control" name="Stok_Barang" placeholder="0">
						</div>
						<div class="form-group">
							<label>Gambar</label>
							<input type="file" class="form-control-file" name="Gambar">
						</div>
						<div class="form-group">
							<input type=submit class="btn btn-info btn-block" name=PR value="Simpan Data">
							<a href=Obat-crud.php class="btn btn-outline-info btn-block"><b>Back</b></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>