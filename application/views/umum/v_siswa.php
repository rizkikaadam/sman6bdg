		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading"></h3>
					  	</div>
					    <div class="panel-body">
					    	<label>Pilih Program : </label>
							<select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>
							<label>Pilih Kelas : </label>
							<select class="form-control">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>
							<hr>
							<label>Cari Siswa : </label>
							<div class="input-group margin-bottom-20">
									<span class="input-group-addon"><i class="fa fa-search"></i></span>
									<input placeholder="cari" class="form-control" type="text" placeholder="cari...">
							</div>
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Data Siswa</h3>
					  	</div>
					    <div class="panel-body">
					    	<table class="table table-bordered">
								<tr class="active">
									<th>No</th>
									<th>Nama</th>
									<th>Kelas</th>
									<th>Email</th>
								</tr>
								<?php $no=1; foreach ($t_siswa as $data_siswa) { ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $data_siswa->nama; ?></td>
									<td><?php echo $data_siswa->kelas; ?></td>
									<td><?php echo $data_siswa->email; ?></td>
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