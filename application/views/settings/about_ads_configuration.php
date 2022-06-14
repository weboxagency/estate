
<section class="panel">
	<div class="tabs-custom">
		<div class="tab-content">
			<div class="tab-pane active" id="create">
				
					<div class="row">
						<?php foreach($about_ads_configuration as $row){ ?>
							<div class="col-md-4">
								<div class="panel">
							  	<div class="panel-body">
							    <h5 class="panel-title"><?php echo translate($row['modul_name']) ?></h5>
							    <p><?php echo $row['modul_info'] ?></p>
							    <div class="material-switch ml-xs">
											<input class="modul_switch" id="switch_<?=$row['id']?>" data-id="<?=$row['id']?>" name="switch<?=$row['id']?>" 
											type="checkbox" <?php echo ($row['status'] == 1 ? 'checked' : ''); ?> />
											<label for="switch_<?=$row['id'] ?>" class="label-primary"></label>
										</div>
								  </div>
								</div>
							</div>
						<?php } ?>
						
					</div>
				
			</div>
		</div>
	</div>
</section>