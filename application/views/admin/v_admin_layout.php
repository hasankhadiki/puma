

 	<!--banner-->
		    <div class="banner">
		    	<h2>
				<a href="<?php echo base_url('index.php/dm_admin/index');?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Produk</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-system">
 		<!---->
 		<div class="horz-grid">
 		<div class="grid-hor">

	<div class="konten" style="text-align: center;">
		<div class="tombol">
			<a class="btn btn-success" href="#" data-toggle="modal" data-target="#myModal">Tambah Barang</a>
		</div>
		<h2><?php if (isset($error)) {
			echo $error;
		} ?></h2>
	</div>

			<table class="table table-bordered ">
				<tr>
					<th>ID</th>
					<th>NAMA</th>
					<th>MERK</th>
					<th>HARGA</th>
					<th>DESKRIPSI</th>
					<th>FOTO</th>
					<th>AKSI</th>
				</tr>
				<?php $i=0; $j=0;
				foreach($data as $x){
				?>
				<tr>
					<td style="text-align: left;" id=i><?php echo $x['id_barang']; ?></td>
					<td style="text-align: left;"><?php echo $x['nama_barang']; ?></td>
					<td style="text-align: left;"><?php echo $x['merk_barang']; ?></td>
					<td style="text-align: left;"><?php echo $x['harga_barang']; ?></td>
					<td style="text-align: left;"><?php echo $x['deskripsi_barang']; ?></td>
					<td style="text-align: left; max-width: 220px;"><img style="max-width: 100%; height: auto" src="<?php echo base_url().$x['image']; ?>"></td>
					<td align="center">
						<a
    					href="javascript:;"
    					data-nama_barang="<?php echo $x['nama_barang'] ?>"
    					data-merk_barang="<?php echo $x['merk_barang'] ?>"
    					data-harga_barang="<?php echo $x['harga_barang'] ?>"
							data-deskripsi_barang="<?php echo $x['deskripsi_barang'] ?>"
							data-image="<?php $x['image']; ?>"
    					data-toggle="modal" data-target="#modalEdit">
    					<button style="width:100px" data-toggle="modal" data-target="#edit-data" class="btn btn-info">Ubah</button>
						</a>
						<a href="<?php base_url() ?>hapus/<?php echo $x['id_barang'] ?>">
							<button style="width:100px" class="btn btn-warning">Hapus</button>
						</a>

						<div>

					</td>
				</tr>

</div>
				<?php

				}
				?>
			</table>

</div>
</div>
 	<!--//grid-->
		<!---->
		<!--modal Edit-->

<div id="modalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Barang</h4>
      </div>
      <form method="POST" action="<?php echo base_url()."dm_admin/ubah"; ?>" enctype='multipart/form-data'>
      	<div class="modal-body">
					<div class="form-group">
		  			<label for="comment">Nama</label>
		  			<input type="text" class="form-control" name="nama_barang" id="nama_barang">
					</div>
        	<div class="form-group">
		  			<label for="comment">Merk</label>
		  			<input type="text" class="form-control" name="merk_barang" id="merk_barang">
					</div>
        	<div class="form-group">
		  			<label for="comment">Harga</label>
		  			<input type="text" class="form-control" name="harga_barang" id="harga_barang">
					</div>
        	<div class="form-group">
		  			<label for="comment">Deskripsi</label>
		  			<textarea type="text" class="form-control" name="deskripsi_barang" id="deskripsi_barang"></textarea>
		  <!-- <input type="text" class="form-control" name="deskripsi" required=""> -->
					</div>
					<div class="form-group">
		  			<label for="comment">Gambar</label>
		  			<input type="file" name="file1" id="image">
					</div>
      </div>
      <div class="modal-footer">
				<button type="submit" class="btn btn-info">Simpan</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
      </div>
      </form>
    </div>

  </div>
</div>

<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#modalEdit').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#nama_barang').attr("value",div.data('nama_barang'));
            modal.find('#merk_barang').attr("value",div.data('merk_barang'));
						modal.find('#harga_barang').attr("value",div.data('harga_barang'));
						modal.find('#deskripsi_barang').attr("value",div.data('deskripsi_barang'));
						modal.find('#image').attr("value",div.data('image'));
        });
    });
</script>
	<!--modal Tambah-->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Tambah Barang</h4>
	      </div>
	      <form method="POST" action="<?php echo base_url()."dm_admin/insert"; ?>" enctype='multipart/form-data'>
	      <div class="modal-body">
			<div class="form-group">
			  <label for="comment">Nama</label>
			  <input type="text" class="form-control" name="nama_barang" required="">
			</div>
	        <div class="form-group">
			  <label for="comment">Merk</label>
			  <input type="text" class="form-control" name="merk_barang" required="">
			</div>
	        <div class="form-group">
			  <label for="comment">Harga</label>
			  <input type="text" class="form-control" name="harga_barang" required="">
			</div>
	        <div class="form-group">
			  <label for="comment">Deskripsi</label>
			  <textarea type="text" class="form-control" name="deskripsi_barang" required=""></textarea>
			  <!-- <input type="text" class="form-control" name="deskripsi" required=""> -->
			</div>
			<div class="form-group">
			  <label for="comment">Gambar</label>
			  <input type="file" name="file1">
			</div>
	      </div>
		                <div class="modal-footer">
		                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
		                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
		                </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

	<div class="copy">
    	<p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	</div>
	</div>
	</div>
	<div class="clearfix"> </div>
  </div>

<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>
