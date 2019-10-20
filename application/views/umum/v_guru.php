		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading"><i class="fa fa-users fa-lg"></i> Data Guru & Staf TU</h3>
					  	</div>
					    <div class="panel-body">
				            <div class="tabs alternative">
				                <ul class="nav nav-tabs">
				                    <li class="active"><a href="#sample-2a" data-toggle="tab">Guru</a></li>
				                    <li><a href="#sample-2b" data-toggle="tab">Staf TU</a></li>
				                </ul>
				                <div class="tab-content">
				                    <div class="tab-pane fade in active" id="sample-2a">
				                    	<table class="table table-bordered">
											<tr class="active">
												<th>No.</th>
												<th>NIP</th>
												<th>Nama</th>
												<th>Pelajaran</th>
											</tr>
											<?php $no=1; foreach ($t_guru as $data_guru) { ?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td><?php echo $data_guru->nip; ?></td>
												<td><?php echo $data_guru->nama; ?></td>
												<td>D</td>
											</tr>
											<?php } ?>
										</table>
				                    </div>
				                    <div class="tab-pane fade in" id="sample-2b">
				                    		<table class="table table-bordered">
												<tr class="active">
													<th>No.</th>
													<th>NIP</th>
													<th>Nama</th>
													<th>Jabatan</th>
												</tr>
												<?php $no=1; foreach ($t_staf as $data_staf_tu) { ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $data_staf_tu->nip; ?></td>
													<td><?php echo $data_staf_tu->nama; ?></td>
													<td><?php echo $data_staf_tu->pangkat; ?></td>
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