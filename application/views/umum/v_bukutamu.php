<div class="col-md-9">
		<!--awal visi,misi, Sekolah-->
			<div class="panel panel-info">
			  	<div class="panel-heading">Buku Tamu</h3>
			  	</div>
			    <div class="panel-body">
				<div class="tabs alternative">
	                <ul class="nav nav-tabs">
	                    <li class="active"><a href="#sample-2a" data-toggle="tab">Isi Buku Tamu</a></li>
	                    <li><a href="#sample-2b" data-toggle="tab">Buku Tamu</a></li>
	                </ul>
	                <div class="tab-content">
	                    <div class="tab-pane fade in active" id="sample-2a">
	                    	<form>
								<label>Name</label>
								<div class="row margin-bottom-20">
									<div class="col-md-6 col-md-offset-0">
										<input class="form-control" type="text">
									</div>
								</div>
								<label>Alamat</label>
								<div class="row margin-bottom-20">
									<div class="col-md-6 col-md-offset-0">
										<input class="form-control" type="text">
									</div>
								</div>
								<label>Email <span class="color-red">*</span></label>
								<div class="row margin-bottom-20">
									<div class="col-md-6 col-md-offset-0">
										<input class="form-control" type="text">
									</div>
								</div>
								<label>Komentar</label>
								<div class="row margin-bottom-20">
									<div class="col-md-8 col-md-offset-0">
										<textarea rows="8" class="form-control"></textarea>
									</div>
								</div>
								
								<p><button type="submit" class="btn btn-primary">Send Message</button></p>
						</form>
	                    </div>
	                    <div class="tab-pane fade in" id="sample-2b">
	                    	<?php foreach ($t_buku as $data_buku) { ?>
							<div class="carousel slide testimonials" id="testimonials1">
		                        <div class="carousel-inner">
		                            <div class="item active">
		                                <div class="col-md-12">
		                                    <p><?php echo $data_buku->komentar; ?></p><span class="date"><i class="fa fa-calendar fa-lg"></i> <?php echo $data_buku->postdate; ?></span>
		                                    <div class="testimonial-info">
		                                        <span class="testimonial-author">
		                                        <i class="fa fa-user fa-lg"></i> <?php echo $data_buku->nama; ?>
		                                        </span>
		                                    </div>
		                                </div>
		                                <div class="clearfix"></div>
		                            </div>
		                        </div>
		                    </div>
		                    <?php } ?>
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