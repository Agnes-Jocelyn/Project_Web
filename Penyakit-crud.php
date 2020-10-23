<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Disease | The Utopia</title>
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
			<a href=input_Penyakit.php class=" btn btn-info"><b>INPUT NEW DATA</b></a>
			<table class="table mt-3">
				<thead>
					<tr>
						<th colspan=6><center>Data Penyakit</center></th>
					</tr>
					<tr>
						<th><center>NO</center></th>
						<th><center>Kode Penyakit</center></th>
						<th><center>Nama Penyakit</center></th>
						<th><center>Gejala Penyakit</center></th>
						<th><center>Cara Mengobati</center></th>
						<th><center>Keterangan</center></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						include("koneksi.php");
						$no = 1;
						$query = mysql_query("select * from penyakit");
						while($cat = mysql_fetch_array($query)){?>
					<tr>
						<td data-label="NO"><?php echo $no;?></td>
						<td data-label="KD Penyakit"><?php echo $cat['KD_Penyakit'];?></td>
						<td data-label="Nama Penyakit"><?php echo $cat['Nama_Penyakit'];?></td>
						<td data-label="Gejala"><?php echo $cat['Gejala'];?></td>
						<td data-label="Pengobatan"><?php echo $cat['Mengobati'];?></td>
						<td data-label="KET"><center>
							<button type="button" class="btn btn-success"><a href ="edit_penyakit.php?id=<?php echo $cat['KD_Penyakit'];?>"><font color="white">EDIT</font></a></button>
							<button type="button" class="btn btn-danger"><a href ="delete_penyakit.php?id=<?php echo $cat['KD_Penyakit'];?>"onClick="return confirm('Anda Yakin Mau Dihapus?');"><font color="white">DELETE</font></a></button></center>
						</td>
						<?php
						$no++;}?>
					</tr>
				</tbody>
			</table>
		</div>
		</div>
	</body>
</html>