 	<!--banner-->
		    <div class="banner">
		    	<h2>
				<a href="<?php echo base_url('index.php/dm_admin/index');?>">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Pelanggan</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-system">
 		<!---->
 		<div class="horz-grid">
 		<div class="grid-hor">

	<div class="konten" style="text-align: center;">
		<h2><?php if (isset($error)) {
			echo $error;
		} ?></h2>
	</div>

			<table class="table table-bordered ">
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Level</th>
					<!--<th>Action</th>-->
				</tr>
				<?php $i=1; $j=0;
				foreach($data as $x){
				?>
				<tr>
					<td><?php echo $i; $i+=1; ?></td>
					<td style="text-align: left;" id=i><?php echo $x['FirstName'];?></td>
					<td style="text-align: left;"><?php echo $x['email']; ?></td>
					<td style="text-align: left;"><?php echo $x['level']; ?></td>
					<!--<td align="center">
						<a
    					href="javascript:;"
    					data-nama_barang="<?php echo $x['FirstName'] ?>"
    					data-merk_barang="<?php echo $x['email'] ?>"
    					data-harga_barang="<?php echo $x['level'] ?>"
    					data-toggle="modal" data-target="#modalEdit">
    					<button style="width:100px" data-toggle="modal" data-target="#edit-data" class="btn btn-info">Ubah</button>
						</a>
					
						<a href="<?php base_url() ?>hapus/<?php echo $x['email'] ?>"
							<button style="width:100px" class="btn btn-warning">Hapus</button>
						</a>
					

					</td>-->
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
        <h4 class="modal-title">Edit Pelanggan</h4>
      </div>
      <form method="POST" action="<?php echo base_url()."dm_admin/ubah_user"; ?>" enctype='multipart/form-data'>
      	<div class="modal-body">
					<div class="form-group">
		  			<label for="comment">Nama</label>
		  			<input type="text" class="form-control" name="nama" id="nama">
					</div>
        	<div class="form-group">
		  			<label for="comment">Email</label>
		  			<input type="text" class="form-control" name="email" id="email">
					</div>
        	<div class="form-group">
		  			<label for="comment">Level</label>
		  			<input type="text" class="form-control" name="level" id="level">
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
            modal.find('#firstname').attr("value",div.data('FirstName'));
            modal.find('#email').attr("value",div.data('email'));
			modal.find('#level').attr("value",div.data('level'));
        });
    });
</script>
	<!--modal Tambah-->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

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
