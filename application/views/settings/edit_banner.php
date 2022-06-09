<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li>
				<a href="<?=base_url('settings/ads_banners')?>"><i class="fas fa-list-ul"></i> <?=translate('all_banners')?></a>
			</li>
			<li class="active">
				<a href="#edit" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('edit_banner')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="edit">
				<?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
				
					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('banner_image')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="file" class="dropify" id="dropify" value="salam.jpg" data-default-file="<?=base_url($banner['file'])?>" name="file">
							<span class="error"><?=form_error('file') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="position"><?=translate('position')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="position" id="position">
								<option disabled><?= translate('please_select_one_item') ?></option>
								<option value="left" <?php ($banner['position']=='left') ? 'selected' : '' ?>><?= translate('left_banner') ?></option>
								<option value="right" <?php ($banner['position']=='right') ? 'selected' : '' ?>><?= translate('right_banner') ?></option>
								<option value="center" <?php ($banner['position']=='center') ? 'selected' : '' ?>><?= translate('center_banner') ?></option>
							</select>
							<span class="error"><?=form_error('position') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('external_link')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="url" value="<?php echo $banner['external_link'] ?>" class="form-control" placeholder="https://estate.az" name="external_link">
							<span class="error"><?=form_error('external_link') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="status" id="status">
								<option disabled><?= translate('please_select_one_item') ?></option>
								<option value="0" <?php ($banner['status']=='0') ? 'selected' : '' ?>><?= translate('deactive') ?></option>
								<option value="1" <?php ($banner['status']=='1') ? 'selected' : '' ?>><?= translate('active') ?></option>
							</select>
							<span class="error"><?=form_error('status') ?></span>
						</div>
					</div>
					
					
					<footer class="panel-footer mt-lg">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" class="btn btn-default btn-block" name="edit" value="edit">
									<i class="fas fa-plus-circle"></i> <?=translate('save')?>
								</button>
							</div>
						</div>	
					</footer>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</section>