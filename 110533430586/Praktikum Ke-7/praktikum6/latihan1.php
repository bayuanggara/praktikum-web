<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Pencarian Data</title>

		<link href="bootstrap.css" rel="stylesheet" media="screen">

	</head>

	<body>
		<p> <form action="<?php $_SERVER['PHP_SELF'];?>" method="get" class="form-search">
			Nama 
			  <input type="text" name="nama" size="40" class="input-medium search-query"/>
		  
			  <input type="submit" value="Cari" class="btn btn-success" />
		        
		</form></p>
		
		<?php
			if(isset($_GET['nama'])){
				require_once './koneksi.php';
				
				// Kata kunci pencarian
				$key = $_GET['nama'];
				
				//variabel $sql berisi pernyataan SQL pencarian
				$sql="SELECT * FROM mahasiswa WHERE nama = '$key'";
				$res=mysql_query($sql); //eksekusi pernyataan
				if($res){ 
					$num = mysql_num_rows($res); //mengambil jumlah banyaknya rows dari record
					if($num){
						echo 'Ditemukan '.$num.' row(s)'; ?>
						<table class="table-bordered table-hover table-striped ">
							<tr>
								<th>#</th>
								<th width="100">NIM</th>
								<th width="150">Nama</th>
								<th>Alamat</th>
							</tr>
							<?php
							$i=1;
							while($row = mysql_fetch_row($res)){ ?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $row[0];?></td>
									<td><?php echo $row[1];?></td>
									<td><?php echo $row[2];?></td>
								</tr>
								<?php
								$i++;
							}
							?>
						</table>
						<?php
					}else{
						echo 'Data Tidak Ditemukan';
					}
					
				}
			}else{
				echo 'Masukkan kata kunci pencarian';
			}
			?>
	<script src="bootstrap-button"></script>
	</body>
</html>