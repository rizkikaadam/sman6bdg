		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Materi Uji</h3>
					  	</div>
					    <div class="panel-body">
							<div class="tabs alternative">
				                <ul class="nav nav-tabs">
				                    <li class="active"><a href="#sample-2a" data-toggle="tab">Materi Uji</a></li>
				                    <li><a href="#sample-2b" data-toggle="tab">Materi Ajar</a></li>
				                </ul>
				                <div class="tab-content">
				                    <div class="tab-pane fade in active" id="sample-2a">
				                    	<table class="table table-bordered">
											<tr class="active">
												<th>Judul</th>
												<th>Pelajaran</th>
												<th>Download</th>
											</tr>
											<?php foreach ($t_materi_uji as $data_materi_uji) { ?>
											<tr>
												<td><?php echo $data_materi_uji->judul; ?></td>
												<td><?php echo $data_materi_uji->file; ?></td>
												<td><a href="<?php echo $data_materi_uji->file; ?>"><i class="fa fa-download  fa-lg"></i> </a></td>
											</tr>
											<?php } ?>
										</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2b">
				                    		<table class="table table-bordered">
												<tr class="active">
												<th>Judul</th>
												<th>Pelajaran</th>
												<th>Download</th>
												</tr>
												<?php foreach ($t_materi_ajar as $data_materi_ajar) { ?>
													<tr>
														<td><?php echo $data_materi_ajar->judul; ?></td>
														<td><?php echo $data_materi_ajar->file; ?></td>
														<td><a href="<?php echo $data_materi_ajar->file; ?>"><i class="fa fa-download  fa-lg"></i> </a></td>
													</tr>
													<?php } ?>
											</table>
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