				<div class="col-md-3">
				<!-- Awal Login  -->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title">Search</h3>
					  	</div>
					    <div class="panel-body">
					      <form class="">
								<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-search"></i></span>
									<input placeholder="cari" class="form-control" type="text" placeholder="cari...">
								</div>
							</form>
					  	</div>
					</div>
				<!-- Akhir Login  -->
				<!-- Awal Login  -->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-download  fa-lg"></i> Materi Ajar</h3>
					  	</div>
					    <div class="panel-body">
					      	<ul class="list-unstyled list-services">
					      	<?php foreach ($t_download as $data_materi_uji) {?>
								<li><i class="fa fa-download  fa-lg"></i> <?php echo $data_materi_uji->judul; ?></li>
								<?php } ?>
							</ul>
					  	</div>
					</div>
				<!-- Akhir Login  -->
				<!-- Awal Login  -->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title">Galeri Foto</h3>
					  	</div>
					    <div class="panel-body">
					      	<div id="carousel-example-1" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										<img src="">
									</div>
								<?php foreach ($t_foto as $data_foto) { ?>
									<div class="item">
										<img src="<?php echo base_url() ?>/assets/img/galeri/gb<?php echo $data_foto->id_galeri?>.jpg">
									</div>
								<?php } ?>
								</div>
							</div>
					  	</div>
					</div>
				<!-- Akhir Login  -->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->