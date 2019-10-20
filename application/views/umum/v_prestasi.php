		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading"><i class="fa fa-trophy fa-lg"></i> Prestasi Siswa</h3>
					  	</div>
					    <div class="panel-body">
							<div class="blog-post padding-bottom-20">
								<!-- Blog Item Header -->
								<?php foreach ($t_prestasi as $data_prestasi) {?>
								<div class="blog-item-header">
									<!-- Date 
									<div class="blog-post-date pull-left">
										<span class="day">14</span>
										<span class="month">Dec</span>
									</div>-->
									<!-- End Date -->
									<h2>
									<a href="#">
									<?php echo $data_prestasi->judul ?></a>
									</h2>
								</div>
								<!-- End Blog Item Header -->
								<!-- Blog Item Details -->
								<div class="blog-post-details">
								</div>
								<!-- End Blog Item Details -->
								<!-- Blog Item Body -->
								<div class="blog">
									<div class="clearfix"></div>
									<div class="blog-post-body row margin-top-15">
										<div class="col-md-5" style="padding-left: 20px;">
											<img class="pull-left" src="<?php echo base_url() ?>/assets/img/prestasi/<?php echo $data_prestasi->id_prestasi?>.jpg" alt="thumb1">
										</div>
										<div class="col-md-7">
											<p><?php echo word_limiter($data_prestasi->keterangan,'25'); ?></p>
											<!-- Read More -->
											<a href="#" class="btn btn-primary">
												Read More <i class="icon-chevron-right readmore-icon"></i>
											</a>
											<!-- End Read More -->
										</div>
									</div>
								</div>
								<hr>
								<?php } ?>
								<!-- End Blog Item Body -->
							</div>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->