			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Data Jajak Pendapat</a></li>
				<i class="icon-angle-right"></i>
				<li><a href="#">Edit</a></li>
			</ul>
			<div class="row-fluid">
			<!--awal badan-->
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Jajak Pendapat</h2>
						</div>
						<div class="box-content">
						<?php foreach($voting_edit as $u){ ?>
							<form class="form-horizontal" action="<?php echo base_url(). 'index.php/voting/update'; ?>" method="post">
							  <fieldset>
							  <input type="hidden" class="span6 typeahead" id="typeahead" name="id_voting_tanya" value="<?php echo $u->id_voting_tanya ?>">
								<div class="control-group">
								  <label class="control-label" for="typeahead">Pertanyaan</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="pertanyaan">
								  </div>
								</div> 
								<div class="control-group">
								  <label class="control-label" for="typeahead">Pilihan Jawaban 1</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="warna">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Pilihan Jawaban 2</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="warna">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Pilihan Jawaban 3</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="warna">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Pilihan Jawaban 4</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="warna">
								  </div>
								</div>
								<a href="#">Klik untuk menambah jawaban</a>
								<div class="control-group">
									<label class="control-label">Status</label>
									<div class="controls">
									  <label class="radio">
										<input type="radio" name="status" id="optionsRadios1" value="0" checked="">
										Tidak Aktif
									  </label>
									  <div style="clear:both"></div>
									  <label class="radio">
										<input type="radio" name="status" id="optionsRadios2" value="1">
										Aktif
									  </label>
									</div>
								</div>
								<div class="form-actions">
								  <button type="submit" class="btn btn-primary">Simpan</button>
								  <button type="reset" class="btn">Batal</button>
								</div>
							  </fieldset>
							</form>   
						<?php } ?>
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