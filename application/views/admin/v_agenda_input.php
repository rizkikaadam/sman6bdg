			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Data Agenda</a></li>
				<i class="icon-angle-right"></i>
				<li><a href="#">Tambah</a></li>
			</ul>
			<div class="row-fluid">
			<!--awal badan-->
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Tambah Agenda</h2>
						</div>
						<div class="box-content">
							<form class="form-horizontal" action="<?php echo base_url(). 'index.php/agenda/tambah_aksi'; ?>" method="post">
							  <fieldset>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Judul</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="judul">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Tanggal Mulai</label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12" name="date_start">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="date01">Tanggal Akhir</label>
								  <div class="controls">
									<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12" name="date_end">
								  </div>
								</div>
								<div class="control-group hidden-phone">
								  <label class="control-label" for="textarea2">Isi</label>
								  <div class="controls">
									<textarea class="cleditor" id="textarea2" rows="8" name="isi"></textarea>
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="fileInput">Gambar</label>
								  <div class="controls">
									<input class="input-file uniform_on" id="fileInput" type="file" name="gambar">
								  </div>
								</div> 
								<div class="control-group">
								  <label class="control-label" for="typeahead">Warna</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="warna">
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