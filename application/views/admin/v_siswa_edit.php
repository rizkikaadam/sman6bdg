			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Data Siswa</a></li>
				<i class="icon-angle-right"></i>
				<li><a href="#">Edit</a></li>
			</ul>
			<div class="row-fluid">
			<!--awal badan-->
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Data Siswa</h2>
						</div>
						<div class="box-content">
							<form class="form-horizontal" action="<?php echo base_url(). 'index.php/siswa/tambah_aksi'; ?>" method="post">
							  <fieldset>
							  	<div class="control-group">
								  <label class="control-label" for="typeahead">Nama</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
								  </div>
								</div>
							  	<div class="control-group">
								  <label class="control-label" for="typeahead">NIS</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
								  </div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError3">Kelas</label>
									<div class="controls">
									  <select id="selectError3" name="id_program_ahli">
										<option>X - 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									  </select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError3">Kelamin</label>
									<div class="controls">
									  <select id="selectError3" name="id_program_ahli">
										<option>Laki - laki</option>
										<option>Perempuan</option>
									  </select>
									</div>
								</div>
							  	<div class="control-group">
								  <label class="control-label" for="typeahead">Tempat Lahir</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Tanggal Lahir</label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Alamat</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Telp</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Agama</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">STTB</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">NEM</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="fileInput">Gambar</label>
								  <div class="controls">
									<input class="input-file uniform_on" id="fileInput" type="file">
								  </div>
								</div>
								<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Simpan</button>
								  <button type="reset" class="btn">Batal</button>
								</div>
							  </fieldset>
							</form>   

						</div>
					</div><!--/span-->

				</div><!--/row-->

			<!--akhir badan-->
			</div>
			<hr/>
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>