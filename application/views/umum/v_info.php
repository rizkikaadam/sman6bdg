		<div class="col-md-9">
				<!--awal visi,misi, Sekolah-->
					<div class="panel panel-info">
					  	<div class="panel-heading">Info Sekolah</h3>
					  	</div>
					    <div class="panel-body">
							<!--Awal Menampilkan List Artikel-->
						      	 <!-- Accordion -->
					            <div id="accordion" class="panel-group">
					            <?php $no=1; foreach ($t_info as $data_info) { 
					            	$no++;?>
					                <div class="panel panel-default">
					                    <div class="panel-heading">
					                        <h4 class="panel-title">
					                        <a class="accordion-toggle" href="#collapse-<?php echo $no;?>" data-parent="#accordion" data-toggle="collapse">
					                            <?php echo $data_info->subject; ?>
					                        </a>
					                        </h4>
					                    </div>
					                    <div id="collapse-<?php echo $no;?>" class="accordion-body collapse in">
					                        <div class="panel-body">
					                            <div class="row">
					                                <div class="col-md-12">
					                                    <h3 class="no-margin no-padding">Humanitatis Per Seacula</h3>

					                                    <p><?php echo $data_info->isi; ?></p>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					                <?php } ?>
					            </div>
					            <!-- End Accordion -->
						      <!--Akhir Menampilkan List Artikel-->
					  	</div>
					</div>
				<!--akhir visi,misi, Sekolah-->
				</div>
			</div>
		</div>
	</div>
	<!-- === END CONTENT === -->