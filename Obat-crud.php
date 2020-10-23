<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Medicine | The Utopia</title>
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
		
		<div class="container-isi mt-4">
			<a href=input_Obat.php class="btn btn-info"><b>INPUT NEW DATA</b></a><br>
			<table class="table mt-3">
				<thead>
					<tr>
						<th colspan=8><center>Data Obat</center></th>
					</tr>
					<tr>
						<th><center>NO</center></th>
						<th><center>Kode Obat</center></th>
						<th><center>Nama Obat</center></th>
						<th><center>Harga</center></th>
						<th><center>Deskripsi Obat</center></th>
						<th><center>Stok Barang</center></th>
						<th><center>Gambar</center></th>
						<th><center>Keterangan</center></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						include("koneksi.php");
						$no = 1;
						$query = mysql_query("select * from obat");
						while($cat = mysql_fetch_array($query)){?>
					<tr>
						<td data-label="NO"><?php echo $no;?></td>
						<td data-label="KD Obat"><?php echo $cat['KD_Obat'];?></td>
						<td data-label="Nama Obat"><?php echo $cat['Nama_Obat'];?></td>
						<td data-label="Harga">Rp. <?php echo $cat['Harga'];?></td>
						<td data-label="Deskripsi"><?php echo $cat['Deskripsi'];?></td>
						<td data-label="Stok"><?php echo $cat['Stok_Barang'];?></td>
						<td data-label="Gambar"><?php echo $cat['Gambar'];?></td>
						<td data-label="KET">
							<button type="button" class="btn btn-success"><a href ="edit_obat.php?id=<?php echo $cat['KD_Obat'];?>"><font color="white">EDIT</font></a></button>
							<button type="button" class="btn btn-danger"><a href ="delete_obat.php?id=<?php echo $cat['KD_Obat'];?>"onClick="return confirm('Anda Yakin Mau Dihapus?');"><font color="white">DELETE</font></a></button>
						</td>
						<?php
						$no++;}?>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>