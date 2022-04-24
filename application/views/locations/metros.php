<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li class="<?=(empty($validation_error) ? 'active' : '') ?>">
				<a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?=translate('all_metros')?></a>
			</li>
			<li class="<?=(!empty($validation_error) ? 'active' : '') ?>">
				<a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('add_metro')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div id="list" class="tab-pane <?=(empty($validation_error) ? 'active' : '')?>">
				<div class="mb-md">
					<table class="table table-bordered table-hover table-condensed mb-none table-export">
						<thead>
							<tr>
								<th width="50"><?=translate('id')?></th>
								<th><?=translate('metro_name')?></th>
								<th><?=translate('status')?></th>
								<th class="no-sort"><?=translate('action')?></th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$count = 1;
								foreach($metros as $row):
							?>
							<tr>
								<td><?php echo $count++; ?></td>
								<td><?php echo $row['metro_name'];?></td>
								<td>
									<?php if (get_permission('metros', 'is_edit')) { ?>
										<div class="material-switch ml-xs">
											<input class="metros-switch" id="switch_<?=$row['id']?>" data-id="<?=$row['id']?>" name="metros_switch<?=$row['id']?>" 
											type="checkbox" <?php echo ($row['status'] == 1 ? 'checked' : ''); ?> />
											<label for="switch_<?=$row['id'] ?>" class="label-primary"></label>
										</div>
									<?php } ?>
								</td>
								<td class="min-w-c">
									<!--update link-->
									<a href="<?=base_url('locations/metro_edit/'.$row['id'])?>" class="btn btn-default btn-circle icon">
										<i class="fas fa-pen-nib"></i>
									</a>
									<!-- delete link -->
									<?php echo btn_delete('locations/metro_delete/' . $row['id']);?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="create">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
				
					<div class="form-group mt-md">
						<label class="col-md-3 control-label"><?=translate('metro_name')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="metro_name" value="<?=set_value('metro_name')?>" />
							<span class="error"><?=form_error('metro_name') ?></span>
						</div>
					</div>

					<div class="form-group mt-md">
						<label class="col-md-3 control-label" for="status"><?=translate('status')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="status" id="status">
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