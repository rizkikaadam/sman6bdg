		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Opini</h3>
					  	</div>
					    <div class="panel-body">
							<!--Awal Menampilkan List Artikel-->
							<?php foreach ($t_opini as $data_opini) { ?>
						      	<div class="blog-post padding-bottom-20">
									<!-- Blog Item Header -->
									<div class="blog-item-header">
										<!-- Date -->
										<div class="blog-post-date pull-left">
											<span class="day">14</span>
											<span class="month">Dec</span>
										</div>
										<!-- End Date -->
										<!-- Title -->
										<h2>
										<a href="#">
										<p><?php echo $data_opini->judul; ?></p>
										</h2>
										<div class="clearfix"></div>
										<!-- End Title -->
									</div>
									<!-- End Blog Item Header -->
									<!-- Blog Item Details -->
									<div class="blog-post-details">
										<!-- Author Name -->
										<div class="blog-post-details-item blog-post-details-item-left user-icon">
											<a href="#"><p><?php echo $data_opini->nama; ?></p></a>
										</div>
										<!-- End Author Name -->
									</div>
									<!-- End Blog Item Details -->
									<!-- Blog Item Body -->
									<div class="blog">
										<div class="clearfix"></div>
										<div class="blog-post-body row margin-top-15" style="margin-left:15px;">
											<div class="col-md-12">
												<p><?php echo $data_opini->deskripsi; ?></p>
												<!-- Read More -->
												<a href="#" class="btn btn-primary">
													Read More <i class="icon-chevron-right readmore-icon"></i>
												</a>
												<!-- End Read More -->
											</div>
										</div>
									</div>
									<!-- End Blog Item Body -->
								</div>
						      <!--Akhir Menampilkan List Artikel-->
						      <?php } ?>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->