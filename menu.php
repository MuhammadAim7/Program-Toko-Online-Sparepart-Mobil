<?php 
	include"inc/config.php";
	include"layout/header.php";
	
	
?>
<?php	if(!empty($_GET['id'])){ ?>
		<?php
			extract($_GET); 
			$k = mysql_query("SELECT * FROM produk where id='$id'"); 
			$data = mysql_fetch_array($k);
		?>
		<div class="col-md-9" style="margin-top: -20px;">
			<div class="row">
			<div class="col-md-12">
			<h3>Detail : <?php echo $data['nama'] ?></h3>
				<br/>
				<div class="col-md-12 content-menu" style="margin-top:-20px; width: 215px; margin-right:10px; border-radius:5px;">
				<?php $kat = mysql_fetch_array(mysql_query("SELECT * FROM kategori_produk where id='$data[kategori_produk_id]'"));  ?>
					<h4>Kategori :<a href="<?php echo $url; ?>menu.php?kategori=<?php echo $kat['id'] ?>"><?php echo $kat['nama'] ?></a></h4>
					<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>">
						
						<img src="<?php echo $url; ?>uploads/<?php echo $data['gambar'] ?>" width="200px" height="200px" style="border-radius: 5px;"> 
					</a>
					<br><br>
					<p><?php echo $data['deskripsi'] ?></p>
					<p style="font-size:18px">Harga :<?php echo number_format($data['harga'], 0, ',', '.') ?></p>
					<p>
						<a href="<?php echo $url; ?>keranjang.php?act=beli&&produk_id=<?php echo $data['id'] ?>" class="btn btn-info" href="#" role="button">Pesan</a>
					</p>
				</div>   
				 
					
				
			</div>
			</div> 
		</div>
		
<?php }elseif(!empty($_GET['kategori'])){ ?>	

		<?php
			extract($_GET); 
			$kat = mysql_fetch_array(mysql_query("SELECT * FROM kategori_produk where id='$kategori'")); 
		?>
		<div class="col-md-9" style="margin-top: -20px;">
			<div class="row">
			<div class="col-md-12">
			<!-- <hr> -->
			<h3>Kategori : <?php echo $kat['nama'] ?></h3>
				<?php 
					$k = mysql_query("SELECT * FROM produk where kategori_produk_id='$kategori'");
					while($data = mysql_fetch_array($k)){
				?>
				<div class="col-md-4 content-menu" style=" width: 170px; height:270px; margin-right:10px; margin-top:10px; border-radius:5px;">
					<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>">
						<img src="<?php echo $url; ?>uploads/<?php echo $data['gambar'] ?>" width="150px" height="150px" style="border-radius: 5px;>
						<h4><?php echo $data['nama'] ?></h4>
					</a>
					<p style="font-size:18px">Harga :<?php echo number_format($data['harga'], 0, ',', '.') ?></p>
					<p>
						<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>" class="btn btn-success btn-sm" href="#" role="button">Lihat Detail</a>
						<a href="<?php echo $url; ?>keranjang.php?act=beli&&produk_id=<?php echo $data['id'] ?>" class="btn btn-info btn-sm" href="#" role="button">Pesan</a>
					</p>
				</div>  
				<?php } ?>
				
			</div>
			</div>
		</div>

<?php }else{ ?>	
			
			<div class="col-md-9" style="margin-top: -20px;">
			<div class="row">
			<div class="col-md-12">
			<!-- <hr> -->
			<h3>Daftar Semua Barang</h3>
				<?php 
					$k = mysql_query("SELECT * FROM produk");
					while($data = mysql_fetch_array($k)){
				?>
				<div class="col-md-4 content-menu" style=" width: 170px; height:270px; margin-right:10px; margin-top:10px; border-radius:5px;">
					<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>">
						<img src="<?php echo $url; ?>uploads/<?php echo $data['gambar'] ?>" width="150px" height="150px" style="border-radius: 5px;">
						<h4><?php echo $data['nama'] ?></h4>
					</a>
					<p style="font-size:18px">Harga :<?php echo number_format($data['harga'], 0, ',', '.') ?></p>
					<p>
						<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>" class="btn btn-success btn-sm" href="#" role="button">Lihat Detail</a>
						<a href="<?php echo $url; ?>keranjang.php?act=beli&&produk_id=<?php echo $data['id'] ?>" class="btn btn-info btn-sm" href="#" role="button">Pesan</a>
					</p>
					<br>
					<br>
				</div>  
				<?php } ?>
				
			</div>
			</div>
		</div>

<?php } ?>	
<?php include"layout/footer.php"; ?>