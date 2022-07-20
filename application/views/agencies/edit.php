<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li>
				<a href="<?=base_url('agencies/index')?>"><i class="fas fa-list-ul"></i> <?=translate('all_agencies')?></a>
			</li>
			<li class="active">
				<a href="#edit" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('agency_edit')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="edit">
				<?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
				
				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_name')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" value="<?= $agency['agency_name'] ?>" class="form-control" name="agency_name" />
						<span class="error"><?=form_error('agency_name') ?></span>
					</div>
				</div>

				<div class="form-group mt-md for-image">
                        <label class="col-md-3 control-label"><?=translate('agency_logo')?> <span class="required">*</span></label>
                        <div class="col-md-6">
                            <input type="file" class="dropify" id="dropify" name="img" data-default-file="<?=get_agency_image_url($agency['agency_logo'])?>" >
                            <span class="error"><?=form_error('img') ?></span>
                        </div>
                        <input type="hidden" name="old_user_photo" value="<?=html_escape($agency['agency_logo'])?>">
                </div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_address')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" value="<?= $agency['agency_address'] ?>" class="form-control" name="agency_address" value="<?=set_value('agency_address')?>" />
						<span class="error"><?=form_error('agency_address') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_phone_1')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text"  value="<?= $agency['agency_phone_1'] ?>" class="form-control" name="agency_phone_1" value="<?=set_value('agency_phone_1')?>" />
						<span class="error"><?=form_error('agency_phone_1') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_phone_2')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" value="<?= $agency['agency_phone_2'] ?>" class="form-control" name="agency_phone_2" value="<?=set_value('agency_phone_2')?>" />
						<span class="error"><?=form_error('agency_phone_2') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_phone_3')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" value="<?= $agency['agency_phone_3'] ?>" class="form-control" name="agency_phone_3" value="<?=set_value('agency_phone_3')?>" />
						<span class="error"><?=form_error('agency_phone_3') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_email')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="email" value="<?= $agency['agency_email'] ?>" class="form-control" name="agency_email" value="<?=set_value('agency_email')?>" />
						<span class="error"><?=form_error('agency_email') ?></span>
					</div>
				</div>


				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('domain_url')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="url" value="<?= $agency['domain_url'] ?>" class="form-control" name="domain_url" value="<?=set_value('domain_url')?>" />
						<span class="error"><?=form_error('domain_url') ?></span>
					</div>
				</div>


				<div class="form-group mt-md address">
					<label class="col-md-3 control-label"><?=translate('address')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" value="<?= $agency['agency_address'] ?>" class="form-control" name="address" placeholder="address" />
						<span class="error"><?=form_error('address') ?></span>
						<input type="hidden" name="agency_latitude" id="latitude" value="<?= $agency['agency_latitude'] ?>">
						<input type="hidden" name="agency_longitude" id="longitude" value="<?= $agency['agency_longitude'] ?>">
						<p class="form-message form-message--info align-items-center">
							<i class="fa fa-map-marker"></i>
							<span>
								<a href="#" class="googleMapImg" data-toggle="modal" data-target="#modalMap">Xəritədə göstər</a>
							</span>
						</p>

						<div class="modal fade bd-example-modal-lg" id="modalMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<div class="modal-close" data-dismiss="modal">
											<span>
												<i class="fa fa-times"></i>
											</span>
										</div>
									</div>
									<div class="modal-body">
										<input id="pac-input" class="controls pac-target-input" type="text" placeholder="Ünvan" />
										<div class="map-complex" id="gmap"></div>
										<a id="savelocation" href="#" class="link-button link-button--primary link-setup d-none d-sm-flex" data-dismiss="modal">Save</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group mt-md description">
					<label class="col-md-3 control-label"><?=translate('selected_location')?></label>
					<div class="col-md-6">
						<img id="map-id" src="">
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_description')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<textarea name="agency_description" class="form-control summernote" id="summernote"><?= $agency['agency_description'] ?></textarea>
						<span class="error"><?=form_error('agency_description') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="agency_status" id="status">
							<option disabled><?= translate('please_select_one_item') ?></option>
							<option value="0" <? ($agency['agency_status']==0) ? 'selected' : '' ?> ><?= translate('deactive') ?></option>
							<option value="1" <? ($agency['agency_status']==1) ? 'selected' : '' ?> ><?= translate('active') ?></option>
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