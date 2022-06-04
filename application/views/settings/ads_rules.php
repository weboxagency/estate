<section class="panel">
	<div class="tabs-custom">
		<div class="tab-content">
			<div class="tab-pane active" id="create">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
					
					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('content')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<textarea name="content" class="form-control summernote" id="summernote" name="content">
								<?= $ads_rules['content'] ?? ""; ?>
							</textarea>
							<span class="error"><?=form_error('content') ?></span>
						</div>
					</div>


					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="status" id="status">
								<option disabled selected><?= translate('please_select_one_item') ?></option>
								<option value="0" <?= ($ads_rules['status']==0) ? 'selected' : '' ?>><?= translate('deactive') ?></option>
								<option value="1" <?= ($ads_rules['status']==1) ? 'selected' : '' ?>><?= translate('active') ?></option>
							</select>
							<span class="error"><?=form_error('status') ?></span>
						</div>
					</div>
					
					
					<footer class="panel-footer mt-lg">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" class="btn btn-default btn-block" name="submit" value="edit">
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