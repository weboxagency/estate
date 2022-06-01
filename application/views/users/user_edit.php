<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li>
				<a href="<?=base_url('users/index')?>"><i class="fas fa-list-ul"></i> <?=translate('all_users')?></a>
			</li>
			<li class="active">
				<a href="#edit" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('user_edit')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="edit">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
					<input type="hidden" name="user_id" id="user_id" value="<?php echo $user['id']; ?>">
					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('name')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="name" value="<?=set_value('name', $user['name'])?>" />
							<span class="error"><?=form_error('name') ?></span>
						</div>
					</div>

					 <div class="form-group mt-md">
		                  <label class="col-md-3 control-label"><?=translate('email')?> <span class="required">*</span></label>
		                  <div class="col-md-6">
		                     <input type="email" class="form-control" placeholder="<?= translate('enter_email') ?>" name="email" value="<?=set_value('email', $user['email'])?>" />
		                     <span class="error"><?=form_error('email') ?></span>
		                  </div>
		               </div>

		               <div class="form-group mt-md">
		                  <label class="col-md-3 control-label"><?=translate('phone')?> <span class="required">*</span></label>
		                  <div class="col-md-6">
		                     <input type="text" class="form-control" placeholder="<?= translate('enter_phone_number') ?>" name="mobile" value="<?=set_value('mobile', $user['mobile'])?>" />
		                     <span class="error"><?=form_error('phone') ?></span>
		                  </div>
		               </div>

		               <div class="form-group mt-md">
		                  <label class="col-md-3 control-label"><?=translate('balance')?> <span class="required">*</span></label>
		                  <div class="col-md-6">
		                     <input type="number" class="form-control" placeholder="<?= translate('AZN') ?>" name="balance" value="<?=set_value('balance', $user['balance'])?>" />
		                     <span class="error"><?=form_error('balance') ?></span>
		                  </div>
		               </div>
					
					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="status" id="status">
								<option disabled><?= translate('please_select_one_item') ?></option>
								<option value="0" <?= ($user['status']==0) ? 'selected' : '' ?>><?= translate('deactive') ?></option>
								<option value="1" <?= ($user['status']==1) ? 'selected' : '' ?>><?= translate('active') ?></option>
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