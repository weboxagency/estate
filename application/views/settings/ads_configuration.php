<section class="panel">
	<div class="tabs-custom">
		
		<div class="tab-content">
			<div class="tab-pane active" id="create">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
					
					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('home_ads_limit')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="home_ads_limit" value="<?= $ads_configuration['home_ads_limit'] ?>" />
							<span class="error"><?=form_error('home_ads_limit') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('detail_ads_limit')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="detail_ads_limit" value="<?= $ads_configuration['detail_ads_limit'] ?>" />
							<span class="error"><?=form_error('detail_ads_limit') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('category_ads_limit')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="category_ads_limit" value="<?= $ads_configuration['category_ads_limit'] ?>" />
							<span class="error"><?=form_error('category_ads_limit') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('min_photo_count')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="min_photo_count" value="<?= $ads_configuration['min_photo_count'] ?>" />
							<span class="error"><?=form_error('min_photo_count') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('max_photo_count')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="max_photo_count" value="<?= $ads_configuration['max_photo_count'] ?>" />
							<span class="error"><?=form_error('max_photo_count') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('one_number_ads_count')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="one_number_ads_count" value="<?= $ads_configuration['one_number_ads_count'] ?>" />
							<span class="error"><?=form_error('one_number_ads_count') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('ads_expire_day')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="ads_expire_day" value="<?= $ads_configuration['ads_expire_day'] ?>" />
							<span class="error"><?=form_error('ads_expire_day') ?></span>
						</div>
					</div>
					
					
					<footer class="panel-footer mt-lg">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" class="btn btn-default btn-block" name="submit" value="edit">
									<i class="fas fa-plus-circle"></i> <?=translate('edit')?>
								</button>
							</div>
						</div>	
					</footer>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</section>