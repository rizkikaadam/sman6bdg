		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">
					    	<h3 class="panel-title"><i class="fa fa-building-o fa-lg"></i> Ekstrakulikuler</h3>
					  	</div>
					    <div class="panel-body">
							<table class="table table-bordered">
							<p>Berikut adalah ekstrakulikuler yang terdapat di oleh sekolah SMAN 6 Bandung.</p>
								<tr class="active">
									<th>No.</th>
									<th>Nama</th>
									<th>Pembina</th>
									<th>Pelatih</th>
									<th>Ketua</th>
								</tr>
								<?php $no=1; foreach ($t_ekstrakulikuler as $data_ekstrakulikuler) { ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data_ekstrakulikuler->nama; ?></td>
									<td><?php echo $data_ekstrakulikuler->pembina; ?></td>
									<td><?php echo $data_ekstrakulikuler->pelatih; ?></td>
									<td><?php echo $data_ekstrakulikuler->ketua; ?></td>
								</tr>
								<?php } ?>
							</table>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->