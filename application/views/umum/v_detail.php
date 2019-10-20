				<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					  	<?php foreach ($t_detail as $data) { ?>
					    	<h3 class="panel-title">Visi, Misi, Strategi & Tujuan</h3>
					  	</div>
					    <div class="panel-body">
							<div class="blog-post">
						<div class="blog-item-header">
							<div class="blog-post-date pull-left">
								<span class="day">14</span>
								<span class="month">Dec</span>
							</div>
							<h2>
							<a href="#">
								<?php echo $data->judul; ?>
							</a>
							</h2>
						</div>
						<div class="blog-post-details">
							<!-- Author Name -->
							<div class="blog-post-details-item blog-post-details-item-left user-icon">
								<i class="fa fa-user"></i>
								<a href="#"><?php echo $data->nama; ?></a>
							</div>
							<!-- End Author Name -->
						</div>
						<div class="blog-item">
							<div class="clearfix"></div>
							<div class="blog-post-body row margin-top-15" style="margin-left:10px;">
								<div class="col-md-12">
									<p><?php echo $data->isi; ?></p>
								</div>
							</div>
							<?php } ?>
							<div class="blog-item-footer">
								<!-- Comments -->
								<div class="blog-recent-comments panel panel-default margin-bottom-30">
									<div class="panel-heading">
										<h3>Komentar</h3>
									</div>
									<ul class="list-group">
									<?php foreach ($t_komentar as $data_komentar) { ?>
										<li class="list-group-item">
											<div class="row">
												<div class="col-md-12" style="margin-left:10px;">
													<h4><?php echo $data_komentar->nama; ?></h4>
													<h6><?php echo $data_komentar->email; ?></h6>
													<p><?php echo $data_komentar->komentar; ?></p>
													<span class="date"><i class="fa fa-clock-o"></i> <?php echo $data_komentar->tanggal; ?></span>
												</div>
											</div>
										</li>
									<?php } ?>
									</ul>

									
								</div>
								<!-- End Comments -->
							</div>
							<div class="blog-recent-comments panel panel-default margin-bottom-30">
									<div class="panel-heading">
										<h3>Masukan Komentar</h3>
									</div>
									
									<form style="margin-left:20px;margin-right:20px;">
										<label>Name</label>
										<div class="row margin-bottom-20">
											<div class="col-md-7 col-md-offset-0">
												<input class="form-control" type="text">
											</div>
										</div>
										
										<label>Email <span>*</span></label>
										<div class="row margin-bottom-20">
											<div class="col-md-7 col-md-offset-0">
												<input class="form-control" type="text">
											</div>
										</div>
										
										<label>Message</label>
										<div class="row margin-bottom-20">
											<div class="col-md-11 col-md-offset-0">
												<textarea class="form-control" rows="8"></textarea>
											</div>
										</div>
										
										<p><button class="btn btn-blue" type="submit">Send Message</button></p>
									</form>
							</div>
							
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