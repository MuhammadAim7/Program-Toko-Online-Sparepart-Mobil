<?php 
	include"inc/config.php";
	include"layout/header.php";
	
?>

		<div class="col-md-9" style="margin-top: -20px;">
			<div class="row">
			<div class="col-md-12">
			<h3>Paling Sering Dicari</h3>
				
				<?php 
					$k = mysql_query("SELECT * FROM produk ORDER BY id ASC limit 4"); 
					while($data = mysql_fetch_array($k)){
				?>
				<div class="col-md-4 content-menu" style="width: 170px;  height:270px;  margin-right:10px; margin-top:10px; border-radius:5px;">
					<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>">
						<img src="<?php echo $url; ?>uploads/<?php echo $data['gambar'] ?>" width="150px" height="150px" style="border-radius: 5px;">
						<h4><?php echo $data['nama'] ?></h4>
					</a>
					<!-- <p><?php echo $data['deskripsi'] ?></p> -->
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
			<div class="row">
			<div class="col-md-12">
			<hr>
			<h3>Barang Baru</h3>
				<?php 
					$k = mysql_query("SELECT * FROM produk ORDER BY id DESC limit 4"); 
					while($data = mysql_fetch_array($k)){
				?>
				<div class="col-md-4 content-menu" style="width:170px;  height:270px;  margin-right:10px; margin-top:10px; border-radius:5px;">
					<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>">
						<img src="<?php echo $url; ?>uploads/<?php echo $data['gambar'] ?>" width="150px" height="150px" style="border-radius: 5px;">
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
		
    <?php include"layout/footer.php"; ?>