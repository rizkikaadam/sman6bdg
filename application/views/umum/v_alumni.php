		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Data Alumni</h3>
					  	</div>
					    <div class="panel-body">
							<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-search"></i></span>
									<input class="form-control" type="text" placeholder="cari alumni...">
							</div>
					    <p>Data Alumni ini yang telah menjadi member dan bergabung di sistem komunitas sekolah.</p>
					    	<table class="table table-bordered">
								<tr class="active">
									<th>No.</th>
									<th>Nama</th>
									<th>Email</th>
								</tr>
								<?php $no=1; foreach ($t_alumni as $data_alumni) {?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data_alumni->nama ?></td>
									<td><?php echo $data_alumni->email ?></td>
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