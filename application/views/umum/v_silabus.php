		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-archive fa-fw"></i> Silabus</h3>
					  	</div>
					    <div class="panel-body">
							<div class="tabs alternative">
				                <ul class="nav nav-tabs">
				                    <li class="active"><a href="#sample-2a" data-toggle="tab">Smtr. I</a></li>
				                    <li><a href="#sample-2b" data-toggle="tab">Smtr. II</a></li>
				                    <li><a href="#sample-2c" data-toggle="tab">Smtr. III</a></li>
				                    <li><a href="#sample-2e" data-toggle="tab">Smtr. IV</a></li>
				                    <li><a href="#sample-2f" data-toggle="tab">Smtr. V</a></li>
				                    <li><a href="#sample-2g" data-toggle="tab">Smtr. VI</a></li>
				                    <li><a href="#sample-2h" data-toggle="tab">Smtr. VII</a></li>
				                    <li><a href="#sample-2i" data-toggle="tab">Smtr. VIII</a></li>
				                </ul>
				                <div class="tab-content">
				                    <div class="tab-pane fade in active" id="sample-2a">
				                    	<table class="table table-striped">
											<tr class="active">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Pelajaran</th>
												<th>Download</th>
												<th>Visit</th>
											</tr>
											<?php $no=1; foreach ($s1 as $data_s1) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_s1->tanggal; ?></td>
													<td><?php echo $data_s1->pelajaran; ?></td>
													<td><?php echo $data_s1->file; ?></td>
													<td><?php echo $data_s1->visit; ?></td>
												</tr>
											<?php } ?>
										</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2b">
				                    		<table class="table table-striped">
												<tr class="active">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Pelajaran</th>
												<th>Download</th>
												<th>Visit</th>
												</tr>
											<?php $no=1; foreach ($s2 as $data_s2) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_s2->tanggal; ?></td>
													<td><?php echo $data_s2->pelajaran; ?></td>
													<td><?php echo $data_s2->file; ?></td>
													<td><?php echo $data_s2->visit; ?></td>
												</tr>
											<?php } ?>
											</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2c">
				                    		<table class="table table-striped">
												<tr class="active">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Pelajaran</th>
												<th>Download</th>
												<th>Visit</th>
												</tr>
											<?php $no=1; foreach ($s3 as $data_s3) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_s3->tanggal; ?></td>
													<td><?php echo $data_s3->pelajaran; ?></td>
													<td><?php echo $data_s3->file; ?></td>
													<td><?php echo $data_s3->visit; ?></td>
												</tr>
											<?php } ?>
											</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2d">
				                    		<table class="table table-striped">
												<tr class="active">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Pelajaran</th>
												<th>Download</th>
												<th>Visit</th>
												</tr>
											<?php $no=1; foreach ($s4 as $data_s4) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_s4->tanggal; ?></td>
													<td><?php echo $data_s4->pelajaran; ?></td>
													<td><?php echo $data_s4->file; ?></td>
													<td><?php echo $data_s4->visit; ?></td>
												</tr>
											<?php } ?>
											</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2e">
				                    		<table class="table table-striped">
												<tr class="active">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Pelajaran</th>
												<th>Download</th>
												<th>Visit</th>
												</tr>
											<?php $no=1; foreach ($s5 as $data_s5) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_s5->tanggal; ?></td>
													<td><?php echo $data_s5->pelajaran; ?></td>
													<td><?php echo $data_s5->file; ?></td>
													<td><?php echo $data_s5->visit; ?></td>
												</tr>
											<?php } ?>
											</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2f">
				                    		<table class="table table-striped">
												<tr class="active">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Pelajaran</th>
												<th>Download</th>
												<th>Visit</th>
												</tr>
											<?php $no=1; foreach ($s6 as $data_s6) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_s6->tanggal; ?></td>
													<td><?php echo $data_s6->pelajaran; ?></td>
													<td><?php echo $data_s6->file; ?></td>
													<td><?php echo $data_s6->visit; ?></td>
												</tr>
											<?php } ?>
											</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2g">
				                    		<table class="table table-striped">
												<tr class="active">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Pelajaran</th>
												<th>Download</th>
												<th>Visit</th>
												</tr>
											<?php $no=1; foreach ($s7 as $data_s7) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_s7->tanggal; ?></td>
													<td><?php echo $data_s7->pelajaran; ?></td>
													<td><?php echo $data_s7->file; ?></td>
													<td><?php echo $data_s7->visit; ?></td>
												</tr>
											<?php } ?>
											</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2h">
				                    		<table class="table table-striped">
												<tr class="active">
												<th>No.</th>
												<th>Tanggal</th>
												<th>Pelajaran</th>
												<th>Download</th>
												<th>Visit</th>
												</tr>
											<?php $no=1; foreach ($s8 as $data_s8) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_s8->tanggal; ?></td>
													<td><?php echo $data_s8->pelajaran; ?></td>
													<td><?php echo $data_s8->file; ?></td>
													<td><?php echo $data_s8->visit; ?></td>
												</tr>
											<?php } ?>
											</table>
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