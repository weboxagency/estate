<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li>
				<a href="<?=base_url('locations/districts')?>"><i class="fas fa-list-ul"></i> <?=translate('all_districts')?></a>
			</li>
			<li class="active">
				<a href="#edit" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('district_edit')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="edit">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
					
					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="parent_region"><?=translate('regions')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="parent_region" id="parent_region">
								<option disabled selected><?= translate('please_select_one_item') ?></option>
								<?php foreach($regions as $region): ?>
									<option value="<?= $region['id'] ?>" <?= $region['id']==$district['parent_region'] ? 'selected' : ''?>><?= $region['region_name'] ?></option>
								<?php endforeach; ?>
							</select>
							<span class="error"><?=form_error('parent_region') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('district_name')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="district_name" value="<?=set_value('district_name', $district['district_name'])?>" />
							<span class="error"><?=form_error('district_name') ?></span>
						</div>
					</div>
					
					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="status" id="status">
								<option disabled><?= translate('please_select_one_item') ?></option>
								<option value="0" <?= ($district['status']==0) ? 'selected' : '' ?>><?= translate('deactive') ?></option>
								<option value="1" <?= ($district['status']==1) ? 'selected' : '' ?>><?= translate('active') ?></option>
							</select>
							<span class="error"><?=form_error('status') ?></span>
						</div>
					</div>

					<footer class="panel-footer mt-lg">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" class="btn btn-default btn-block" name="submit" value="edit">
									<i class="fas fa-plus-circle"></i> <?=translate('update')?>
								</button>
							</div>
						</div>	
					</footer>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
</section>