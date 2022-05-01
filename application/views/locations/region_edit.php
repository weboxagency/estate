<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li>
				<a href="<?=base_url('locations/regions')?>"><i class="fas fa-list-ul"></i> <?=translate('all_regions')?></a>
			</li>
			<li class="active">
				<a href="#edit" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('region_edit')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="edit">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
					
					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="parent_city"><?=translate('cities')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="parent_city" id="parent_city">
								<option disabled selected><?= translate('please_select_one_item') ?></option>
								<?php foreach($cities as $city): ?>
									<option value="<?= $city['id'] ?>" <?= $city['id']==$region['parent_city'] ? 'selected' : ''	 ?>><?= $city['city_name'] ?></option>
								<?php endforeach; ?>
							</select>
							<span class="error"><?=form_error('parent_city') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('region_name')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="region_name" value="<?=set_value('region_name', $region['region_name'])?>" />
							<span class="error"><?=form_error('region_name') ?></span>
						</div>
					</div>
					
					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="status" id="status">
								<option disabled><?= translate('please_select_one_item') ?></option>
								<option value="0" <?= ($region['status']==0) ? 'selected' : '' ?>><?= translate('deactive') ?></option>
								<option value="1" <?= ($region['status']==1) ? 'selected' : '' ?>><?= translate('active') ?></option>
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