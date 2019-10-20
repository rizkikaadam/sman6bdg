			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Banner</a></li>
			</ul>
			<div class="row-fluid">
			<!--awal badan-->
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Tambah Banner</h2>
						</div>
						<div class="box-content">
						  <?php foreach($t_banner as $u){ ?>
							<form class="form-horizontal" action="<?php echo base_url(). 'index.php/banner/update'; ?>" method="post">
							  <fieldset>
							  	<div class="control-group">
								  <label class="control-label" for="fileInput">Gambar</label>
								  <div class="controls">
									<input class="input-file uniform_on" id="fileInput" type="file">
								  </div>
								</div> 
								<div class="control-group">
								  <label class="control-label" for="typeahead">Id_banner</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead" name="id_banner" value="<?php echo $u->id_banner ?>" >
								  </div>
								</div>   
								<div class="control-group">
								  <label class="control-label" for="typeahead">id_user</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead" name="id_user" value="<?php echo $u->id_user ?>">
								  </div>
								</div>  
								<div class="control-group">
								  <label class="control-label" for="typeahead">Keterangan</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead" name="alt" value="<?php echo $u->alt ?>">
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Alamat URL</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead" name="url" value="<?php echo $u->url ?>" >
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Status</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead" name="status" value="<?php echo $u->status ?>" >
								  </div>
								</div>
								<div class="control-group">
								  <label class="control-label" for="typeahead">Visit</label>
								  <div class="controls">
									<input type="text" class="span6 typeahead" id="typeahead" name="visit" value="<?php echo $u->visit ?>" >
								  </div>
								</div>
								<div class="control-group">
								<label class="control-label" for="selectError3" >Jenis File</label>
								<div class="controls">
								  <select id="selectError3" name="jenis">
									<option value="gif">GIF</option>
									<option value="swf">SWF</option>
									<option value="jpg">JPG</option>
								  </select>
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