<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li class="<?=(empty($validation_error) ? 'active' : '') ?>">
				<a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?=translate('all_banners')?></a>
			</li>
			<li class="<?=(!empty($validation_error) ? 'active' : '') ?>">
				<a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('add_banner')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div id="list" class="tab-pane <?=(empty($validation_error) ? 'active' : '')?>">
				<div class="mb-md">
					<table class="table table-bordered table-hover table-condensed mb-none table-export">
						<thead>
							<tr>
								<th width="50"><?=translate('id')?></th>
								<th><?=translate('image')?></th>
								<th><?=translate('external_link')?></th>
								<th><?=translate('position')?></th>
								<th><?=translate('status')?></th>
								<th class="no-sort"><?=translate('action')?></th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$count = 1;
								foreach($banners as $row):
							?>
							<tr>
								<td><?php echo $count++; ?></td>
								<td><img src="<?= base_url($row['file'])?>" height="100"></td>
								<td><?php echo $row['external_link'];?></td>
								<td><?php echo $row['position'];?></td>
								<td>
									<?php if (get_permission('cities', 'is_edit')) { ?>
										<div class="material-switch ml-xs">
											<input class="banner-switch" id="switch_<?=$row['id']?>" data-id="<?=$row['id']?>" name="banner_switch<?=$row['id']?>" 
											type="checkbox" <?php echo ($row['status'] == 1 ? 'checked' : ''); ?> />
											<label for="switch_<?=$row['id'] ?>" class="label-primary"></label>
										</div>
									<?php } ?>
								</td>
								<td class="min-w-c">
									<!--update link-->
									<a href="<?=base_url('settings/edit_banner/'.$row['id'])?>" class="btn btn-default btn-circle icon">
										<i class="fas fa-pen-nib"></i>
									</a>
									<!-- delete link -->
									<?php echo btn_delete('settings/delete_banner/' . $row['id']);?>
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
						<label class="col-md-3 control-label"><?=translate('banner_image')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="file" class="dropify" id="dropify" name="file">
							<span class="error"><?=form_error('file') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="position"><?=translate('position')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="position" id="position">
								<option disabled><?= translate('please_select_one_item') ?></option>
								<option value="left"><?= translate('left_banner') ?></option>
								<option value="right"><?= translate('right_banner') ?></option>
								<option value="center"><?= translate('center_banner') ?></option>
							</select>
							<span class="error"><?=form_error('position') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('external_link')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="url" class="form-control" placeholder="https://estate.az" name="external_link">
							<span class="error"><?=form_error('external_link') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="status" id="status">
								<option disabled><?= translate('please_select_one_item') ?></option>
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