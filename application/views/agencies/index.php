<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li class="<?=(empty($validation_error) ? 'active' : '') ?>">
				<a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?=translate('all_agencies')?></a>
			</li>
			<li class="<?=(!empty($validation_error) ? 'active' : '') ?>">
				<a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('add_agency')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div id="list" class="tab-pane <?=(empty($validation_error) ? 'active' : '')?>">
				<div class="mb-md">
					<table class="table table-bordered table-hover table-condensed mb-none table-export">
						<thead>
							<tr>
								<th width="50"><?=translate('agency_id')?></th>
								<th><?=translate('agency_name')?></th>
								<th><?=translate('status')?></th>
								<th class="no-sort"><?=translate('action')?></th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$count = 1;
							foreach($agencies as $row):
								?>
								<tr>
									<td><?php echo $count++; ?></td>
									<td><?php echo $row['agency_name'];?></td>
									<td>
										<div class="material-switch ml-xs">
											<input class="agency-switch" id="switch_<?=$row['agency_id']?>" data-id="<?=$row['agency_id']?>" name="agency_switch<?=$row['agency_id']?>" 
											type="checkbox" <?php echo ($row['agency_status'] == 1 ? 'checked' : ''); ?> />
											<label for="switch_<?=$row['agency_id'] ?>" class="label-primary"></label>
										</div>
									</td>
									<td class="min-w-c">
										<!--update link-->
										<a href="<?=base_url('agencies/agency_edit/'.$row['agency_id'])?>" class="btn btn-default btn-circle icon">
											<i class="fas fa-pen-nib"></i>
										</a>
										<!-- delete link -->
										<?php echo btn_delete('agencies/agency_delete/' . $row['agency_id']);?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="create">
				<?php echo form_open_multipart($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
				
				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_name')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="agency_name" />
						<span class="error"><?=form_error('agency_name') ?></span>
					</div>
				</div>

				<div class="form-group mt-md for-image">
                        <label class="col-md-3 control-label"><?=translate('agency_logo')?> <span class="required">*</span></label>
                        <div class="col-md-6">
                            <input type="file" class="dropify" id="dropify" name="img">
                            <span class="error"><?=form_error('img') ?></span>
                        </div>
                </div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_address')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="agency_address" value="<?=set_value('agency_address')?>" />
						<span class="error"><?=form_error('agency_address') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_phone_1')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="agency_phone_1" value="<?=set_value('agency_phone_1')?>" />
						<span class="error"><?=form_error('agency_phone_1') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_phone_2')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="agency_phone_2" value="<?=set_value('agency_phone_2')?>" />
						<span class="error"><?=form_error('agency_phone_2') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_phone_3')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="agency_phone_3" value="<?=set_value('agency_phone_3')?>" />
						<span class="error"><?=form_error('agency_phone_3') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('agency_email')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="email" class="form-control" name="agency_email" value="<?=set_value('agency_email')?>" />
						<span class="error"><?=form_error('agency_email') ?></span>
					</div>
				</div>


				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?=translate('domain_url')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="url" class="form-control" name="domain_url" value="<?=set_value('domain_url')?>" />
						<span class="error"><?=form_error('domain_url') ?></span>
					</div>
				</div>


				<div class="form-group mt-md address">
					<label class="col-md-3 control-label"><?=translate('address')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="address" placeholder="address" value="<?=set_value('address')?>" />
						<span class="error"><?=form_error('address') ?></span>
						<input type="hidden" name="agency_latitude" id="latitude" value="">
						<input type="hidden" name="agency_longitude" id="longitude" value="">
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
						<textarea name="agency_description" class="form-control summernote" id="summernote"></textarea>
						<span class="error"><?=form_error('agency_description') ?></span>
					</div>
				</div>

				<div class="form-group mt-md">
					<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="agency_status" id="status">
							<option disabled selected><?= translate('please_select_one_item') ?></option>
							<option value="0"><?= translate('deactive') ?></option>
							<option value="1"><?= translate('active') ?></option>
						</select>
						<span class="error"><?=form_error('status') ?></span>
					</div>
				</div>


				<footer class="panel-footer mt-lg">
					<div class="row">
						<div class="col-md-2 col-md-offset-3">
							<button type="submit" class="btn btn-default btn-block" name="submit" value="save">
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

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcVxlZlT3nO44ljCnR2f89GqzxkuCQftY&libraries=places&callback=initMap&language=az"></script>