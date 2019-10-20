		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Galeri Foto</h3>
					  	</div>
					    <div class="panel-body">
							<div class="portfolio-group col-md-12 margin-top-30 no-padding">
							<div class="row">
								<!-- Portfolio Item -->
								<?php foreach ($t_album as $data_album) { ?>
								<div class="portfolio-item col-md-3 code">
									<div class="image-hover">
										<a href="#">
											<figure>
												<img src="<?php echo base_url() ?>/assets/umum/img/portfolio/image1.jpg" alt="image1">
												<div class="overlay">
													<a class="expand" href="#"><?php echo $data_album->album; ?></a>
												</div>
											</figure>
											<h4 class="margin-top-20"><?php echo $data_album->album; ?></h4>
										</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<?php } ?>
								<!-- //Portfolio Item// -->
							</div>
				</div>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->