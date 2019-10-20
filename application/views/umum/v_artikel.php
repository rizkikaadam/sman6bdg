		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Artikel</h3>
					  	</div>
					    <div class="panel-body">
							 <!--Awal Menampilkan List Artikel-->
					      <?php foreach ($t_artikel as $data_artikel) {?>
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
									<h2><a href="#"><?php echo $data_artikel->judul; ?></a></h2>
									<div class="clearfix"></div>
									<!-- End Title -->
								</div>
								<!-- End Blog Item Header -->
								<!-- Blog Item Body -->
								<div class="blog">
									<div class="clearfix"></div>
									<div class="blog-post-body row margin-top-15">
										<div class="col-md-12" style="padding-left:20px;">
											<p><?php echo word_limiter($data_artikel->isi,'25'); ?></a></p>
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
							<?php } ?>
					      <!--Akhir Menampilkan List Artikel-->
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->