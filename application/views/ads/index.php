<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li class="<?= (empty($validation_error) ? 'active' : '') ?>">
				<a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?= translate('add_ads') ?></a>
			</li>
			<li class="<?= (!empty($validation_error) ? 'active' : '') ?>">
				<a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?= translate('add_ads') ?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div id="list" class="tab-pane <?= (empty($validation_error) ? 'active' : '') ?>">
				<div class="mb-md">
					<table class="table table-responsive table-bordered table-hover table-condensed mb-none table-export">
						<thead>
							<tr>
								<th width="50"><?= translate('id') ?></th>
								<th><?= translate('ads_pin_kod') ?></th>
								<th><?= translate('ads_number') ?></th>
								<th><?= translate('type') ?></th>
								<th><?= translate('property_type') ?></th>
								<th><?= translate('price') ?></th>

								<th><?= translate('repair') ?></th>

								<th><?= translate('user_type') ?></th>
								<th><?= translate('name') ?></th>
								<th><?= translate('email') ?></th>
								<th><?= translate('mobile') ?></th>
								<th><?= translate('has_whatsapp') ?></th>

								<th><?= translate('pull_ads_forward_begin') ?></th>
								<th><?= translate('vip_begin') ?></th>
								<th><?= translate('premium_begin') ?></th>
								<th><?= translate('created_at') ?></th>
								<th><?= translate('approved_at') ?></th>
								<th><?= translate('simple_ads_end_date') ?></th>
								<th><?= translate('is_active') ?></th>
								<th><?= translate('status') ?></th>
								<th class="no-sort"><?= translate('action') ?></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$count = 1;
							foreach ($ads as $row) :
							?>
								<tr>
									<td><?php echo $count++; ?></td>
									<td><?php echo $row['ads_pin_kod']; ?></td>
									<td><?php echo $row['ads_number']; ?></td>
									<td>
										<?php
										if ($row['announcement_type'] == 1) {
											echo "Elan";
										} elseif ($row['announcement_type'] == 2) {
											echo "Yaşayış kompleksi";
										} else {
											echo "Biznes mərkəzi";
										}

										?>
									</td>
									<td><?= estateTypeName($row['property_type'])['estate_type_name']; ?></td>
									<td><?= $row['price']; ?> AZN</td>

									<td><?= $row['repair'] == 1 ? 'Təmirli' : 'Təmirsiz'; ?></td>

									<td><?= $row['user_type'] == 1 ? 'Mülkiyyətçi' : 'Vasitəçi'; ?></td>
									<td><?= $row['name']; ?></td>
									<td><?= $row['email']; ?></td>
									<td><?= $row['mobile']; ?></td>
									<td><?= $row['has_whatsapp'] == 1 ? 'Whatsapp aktivdir' : 'Whatsapp aktiv deyil'; ?></td>

									<td>
										<?php
										if ($row['pull_ads_forward_begin'] == NULL) { ?>
											<button class="btn btn-primary btn-sm">
												Elan irəli çəkilməyib
											</button>
										<?php } else { ?>
											<button class="btn btn-primary btn-sm">
												<?= date_aze("j F Y", $row['pull_ads_forward_begin']) ?>
												-
												<?= date_aze("j F Y", $row['pull_ads_forward_end']) ?>
											</button>
										<?php } ?>
									</td>
									<td><?php
										if ($row['vip_begin'] == NULL) { ?>
											<button class="btn btn-info btn-sm">
												Elan VIP deyil
											</button>
										<?php } else { ?>
											<button class="btn btn-info btn-sm">
												<?= date_aze("j F Y", $row['vip_begin']) ?>
												-
												<?= date_aze("j F Y", $row['vip_end']) ?>
											</button>
										<?php } ?>
									</td>
									<td>
										<?php
										if ($row['premium_begin'] == NULL) { ?>
											<button class="btn btn-danger btn-sm">
												Elan Premium deyil
											</button>
										<?php } else { ?>
											<button class="btn btn-danger btn-sm">
												<?= date_aze("j F Y", $row['premium_begin']) ?>
												-
												<?= date_aze("j F Y", $row['premium_end']) ?>
											</button>
										<?php } ?>
									</td>
									<td class="text-success"><?= date_aze("j F Y", $row['created_at']); ?></td>

									<td class="text-success"><?= date_aze("j F Y", $row['approved_at']); ?></td>
									<td class="text-danger"><?= date_aze("j F Y", $row['simple_ads_end_date']); ?></td>
									<td>
										<div class="material-switch ml-xs">
											<input class="ads-switch" id="switch_<?= $row['id'] ?>" data-id="<?= $row['id'] ?>" name="ads_switch<?= $row['id'] ?>" type="checkbox" <?php echo ($row['is_active'] == 1 ? 'checked' : ''); ?> />
											<label for="switch_<?= $row['id'] ?>" class="label-primary"></label>
										</div>
									</td>
									<td>
										<select name="status" class="ads-status" data-id="<?= $row['id'] ?>">
											<option value="1" <?= $row['status'] == 1 ? 'selected' : '' ?>>Dərc edilmiş</option>
											<option value="2" <?= $row['status'] == 2 ? 'selected' : '' ?>>Yoxlanışda olan</option>
											<option value="3" data-id="<?= $row['id'] ?>" <?= $row['status'] == 3 ? 'selected' : '' ?>>Qəbul edilməmiş</option>
											<option value="4" <?= $row['status'] == 4 ? 'selected' : '' ?>>Vaxtı bitmiş</option>
											<option value="5" <?= $row['status'] == 5 ? 'selected' : '' ?>>Silinmiş</option>
										</select>
									</td>
									<td class="min-w-c">
										<button type="button" class="btn btn-info btn-circle icon" data-toggle="modal" data-target="#exampleModal-<?= $row['id'] ?>">
											<i class="fas fa-eye"></i>
										</button>

										<!-- Show modal -->
										<div class="modal fade" id="exampleModal-<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h3>Elan məlumatları</h3>
													</div>
													<div class="modal-body">
														<table class="table table-bordered table-striped">
															<tr>
																<td><?= translate('id') ?></td>
																<td><?php echo $count++; ?></td>
															</tr>
															<tr>
																<td><?= translate('ads_pin_kod') ?></td>
																<td><?= $row['ads_pin_kod'] ?></td>
															</tr>

															<tr>
																<td><?= translate('ads_number') ?></td>
																<td><?= $row['ads_number'] ?></td>
															</tr>

															<tr>
																<td><?= translate('ads_title') ?></td>
																<td><?= $row['ads_title'] ?></td>
															</tr>

															<tr>
																<td><?= translate('type') ?></td>
																<td>
																	<?php
																	if ($row['announcement_type'] == 1) {
																		echo "Elan";
																	} elseif ($row['announcement_type'] == 2) {
																		echo "Yaşayış kompleksi";
																	} else {
																		echo "Biznes mərkəzi";
																	}

																	?>
																</td>
															</tr>

															<tr>
																<td><?= translate('property_type') ?></td>
																<td><?= estateTypeName($row['property_type'])['estate_type_name']; ?></td>
															</tr>

															<tr>
																<td><?= translate('price') ?></td>
																<td><?= $row['price'] ?></td>
															</tr>

															<tr>
																<td><?= translate('room') ?></td>
																<td><?= $row['room'] ?></td>
															</tr>

															<tr>
																<td><?= translate('area') ?></td>
																<td><?= $row['area'] ?></td>
															</tr>

															<tr>
																<td><?= translate('land_area') ?></td>
																<td><?= $row['land_area'] ?></td>
															</tr>

															<tr>
																<td><?= translate('floor') ?></td>
																<td><?= $row['floor'] ?></td>
															</tr>

															<tr>
																<td><?= translate('max_floor') ?></td>
																<td><?= $row['max_floor'] ?></td>
															</tr>

															<tr>
																<td><?= translate('deed') ?></td>
																<td><?= ($row['deed'] == 0) ? 'Yoxdur' : 'Var' ?></td>
															</tr>

															<tr>
																<td><?= translate('mortgage') ?></td>
																<td><?= ($row['mortgage'] == 0) ? 'Yoxdur' : 'Var' ?></td>
															</tr>

															<tr>
																<td><?= translate('repair') ?></td>
																<td><?= $row['repair'] == 1 ? 'Təmirli' : 'Təmirsiz'; ?></td>
															</tr>

															<tr>
																<td><?= translate('user_type') ?></td>
																<td><?= $row['user_type'] == 1 ? 'Mülkiyyətçi' : 'Vasitəçi'; ?></td>
															</tr>

															<tr>
																<td><?= translate('name') ?></td>
																<td><?= $row['name'] ?></td>
															</tr>

															<tr>
																<td><?= translate('email') ?></td>
																<td><?= $row['email'] ?></td>
															</tr>

															<tr>
																<td><?= translate('mobile') ?></td>
																<td><?= $row['mobile'] ?></td>
															</tr>

															<tr>
																<td><?= translate('has_whatsapp') ?></td>
																<td><?= $row['has_whatsapp'] == 1 ? 'Whatsapp aktivdir' : 'Whatsapp aktiv deyil'; ?></td>
															</tr>

															<tr>
																<td><?= translate('pull_ads_forward_begin') ?></td>
																<td>
																	<?php
																	if ($row['pull_ads_forward_begin'] == NULL) { ?>
																		<button class="btn btn-primary btn-sm">
																			Elan irəli çəkilməyib
																		</button>
																	<?php } else { ?>
																		<button class="btn btn-primary btn-sm">
																			<?= date_aze("j F Y", $row['pull_ads_forward_begin']) ?>
																			-
																			<?= date_aze("j F Y", $row['pull_ads_forward_end']) ?>
																		</button>
																	<?php } ?>
																</td>
															</tr>

															<tr>
																<td><?= translate('vip_begin') ?></td>
																<td>
																	<?php
																	if ($row['vip_begin'] == NULL) { ?>
																		<button class="btn btn-primary btn-sm">
																			Elan VIP deyil
																		</button>
																	<?php } else { ?>
																		<button class="btn btn-primary btn-sm">
																			<?= date_aze("j F Y", $row['vip_begin']) ?>
																			-
																			<?= date_aze("j F Y", $row['vip_end']) ?>
																		</button>
																	<?php } ?>
																</td>
															</tr>

															<tr>
																<td><?= translate('premium_begin') ?></td>
																<td>
																	<?php
																	if ($row['premium_begin'] == NULL) { ?>
																		<button class="btn btn-primary btn-sm">
																			Elan irəli çəkilməyib
																		</button>
																	<?php } else { ?>
																		<button class="btn btn-primary btn-sm">
																			<?= date_aze("j F Y", $row['premium_begin']) ?>
																			-
																			<?= date_aze("j F Y", $row['premium_end']) ?>
																		</button>
																	<?php } ?>
																</td>
															</tr>

															<tr>
																<td><?= translate('created_at') ?></td>
																<td><?= date_aze("j F Y", $row['created_at']) ?></td>
															</tr>

															<tr>
																<td><?= translate('approved_at') ?></td>
																<td><?= date_aze("j F Y", $row['approved_at']) ?></td>
															</tr>

															<tr>
																<td><?= translate('simple_ads_end_date') ?></td>
																<td><?= date_aze("j F Y", $row['simple_ads_end_date']) ?></td>
															</tr>

															<tr>
																<td><?= translate('is_active') ?></td>
																<td><?= ($row['is_active'] == 1) ? 'Aktivdir' : 'Aktiv deyil'; ?></td>
															</tr>


															<tr>
																<td><?= translate('show_count') ?></td>
																<td><?= $row['show_count'] . ' nəfər tərəfindən izlənilib.'; ?></td>
															</tr>

															<tr>
																<td><?= translate('status') ?></td>
																<td><?php
																	if ($row['status'] == 1) {
																		echo "Dərc edilmiş";
																	} elseif ($row['status'] == 2) {
																		echo "Yoxlanışda olan";
																	} elseif ($row['status'] == 3) {
																		echo "Qəbul edilməmiş";
																	} elseif ($row['status'] == 4) {
																		echo "Vaxtı bitmiş";
																	} else {
																		echo "Silinmiş";
																	}
																	?></td>
															</tr>

															<tr>
																<td><?= translate('images') ?></td>
																<td>
																	<?php
																	foreach(ads_photos($row['photos']) as $image)
																	{ ?>
																		<img src="<?= $image['avatar'] ?>" alt="">
																	<?php } ?>
																</td>
															</tr>

														</table>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal"><?= translate('close') ?></button>
													</div>
												</div>
											</div>
										</div>


										<!-- Qebul edilmemis status modali -->

										<div class="modal fade" id="qebul-edilmemis-<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Elanın qəbul edilməmə səbəbi</h5>
													</div>
													<div class="modal-body">
														<div class="mt-3">
															<div class="form-group row">
																<label for="reason" class="col-sm-12 col-form-label">Qəbul edilməmə səbəbini daxil edin</label>
																<div class="col-sm-12">
																	<textarea name="reason" id="reason" rows="4" style="min-width: 100%;" class="w-100 form-control" aria-required="true"></textarea>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal"><?= translate('close') ?></button>
															<button type="button" data-id="<?= $row['id'] ?>" class="save-ads-reason btn btn-primary"><?= translate('save') ?></button>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Qebul edilmemis status modali end -->

										<!--update link-->
										<a href="<?= base_url('users/user_edit/' . $row['id']) ?>" class="btn btn-default btn-circle icon">
											<i class="fas fa-pen-nib"></i>
										</a>
										<!-- delete link -->
										<?php echo btn_delete('ads/ads_delete/' . $row['id']); ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane <?= (!empty($validation_error) ? 'active' : '') ?>" id="create">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
				<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" id="estate_token">
				<div class="form-group mt-md related-person">
					<label class="col-md-3 control-label"><?= translate('related_person') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="name" value="<?= set_value('name') ?>" />
						<span class="error"><?= form_error('name') ?></span>
					</div>
				</div>

				<!-- + -->
				<div class="form-group mt-md user-type">
					<label class="col-md-3 control-label"><?= translate('user_type') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="user_type" id="user_type">
							<option value="1"><?= translate('owner') ?></option>
							<option value="2"><?= translate('mediator') ?></option>
						</select>
						<span class="error"><?= form_error('user_type') ?></span>
					</div>
				</div>

				<!-- + -->
				<div class="form-group mt-md mobile">
					<label class="col-md-3 control-label"><?= translate('mobile') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="mobile" value="<?= set_value('mobile') ?>" />
						<span class="error"><?= form_error('mobile') ?></span>
						<label id="has_whatsapp">
							<input type="checkbox" id="has_whatsapp" name="has_whatsapp">
							Whatsapp aktivdir
						</label>
					</div>
				</div>


				<div class="form-group mt-md email">
					<label class="col-md-3 control-label"><?= translate('email') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" />
						<span class="error"><?= form_error('email') ?></span>
					</div>
				</div>

				<div class="form-group mt-md ads-type">
					<label class="col-md-3 control-label"><?= translate('ads_type') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="ads_type" id="ads_type">
							<?php
							foreach ($ads_type as $type) { ?>
								<option value="<?= $type['id'] ?>"><?= $type['type_name'] ?></option>
							<?php } ?>
						</select>
						<span class="error"><?= form_error('ads_type') ?></span>
					</div>
				</div>

				<div class="form-group mt-md estate-type">
					<label class="col-md-3 control-label"><?= translate('estate_type') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="estate_type" id="estate_type">
							<?php
							foreach ($estate_type as $etype) { ?>
								<option value="<?= $etype['id'] ?>"><?= $etype['estate_type_name'] ?></option>
							<?php } ?>
						</select>
						<span class="error"><?= form_error('estate_type') ?></span>
						<div class="deed">
							<label>
								<input type="checkbox" id="deed" name="deed">
								Çıxarış var
							</label>
						</div>

					</div>
				</div>

				<div class="form-group mt-md price">
					<label class="col-md-3 control-label"><?= translate('price') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="price" placeholder="AZN" value="<?= set_value('price') ?>" />
						<span class="error"><?= form_error('price') ?></span>
						<div class="mortgage">
							<label>
								<input type="checkbox" id="mortgage" name="mortgage">
								Ipoteka var
							</label>
						</div>
					</div>
				</div>

				<div class="form-group mt-md room">
					<label class="col-md-3 control-label"><?= translate('room') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="room" placeholder="<?= translate('room') ?>" value="<?= set_value('room') ?>" />
						<span class="error"><?= form_error('room') ?></span>
					</div>
				</div>

				<div class="form-group mt-md floor">
					<label class="col-md-3 control-label"><?= translate('floor') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="floor" placeholder="<?= translate('enter_floor') ?>" value="<?= set_value('floor') ?>" />
						<span class="error"><?= form_error('floor') ?></span>
					</div>
				</div>

				<div class="form-group mt-md max-floor">
					<label class="col-md-3 control-label"><?= translate('max_floor') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="max_floor" placeholder="<?= translate('enter_max_floor') ?>" value="<?= set_value('max_floor') ?>" />
						<span class="error"><?= form_error('max_floor') ?></span>
					</div>
				</div>

				<div class="form-group mt-md area">
					<label class="col-md-3 control-label"><?= translate('area') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="area" placeholder="area" value="<?= set_value('area') ?>" />
						<span class="error"><?= form_error('area') ?></span>

					</div>
				</div>

				<div class="form-group form-inline mt-md repair">
					<label class="col-md-3 control-label"><?= translate('repair') ?> <span class="required">*</span></label>
					<div class="col-md-4">
						<label>
							<input type="radio" name="repair" value="1">
							Təmirli
						</label>
					</div>
					<div class="col-md-4">
						<label>
							<input type="radio" name="repair" value="0">
							Təmirsiz
						</label>
					</div>
				</div>

				<div class="form-group mt-md land-area">
					<label class="col-md-3 control-label"><?= translate('land_area') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="land_area" placeholder="land_area" value="<?= set_value('land_area') ?>" />
						<span class="error"><?= form_error('land_area') ?></span>
					</div>
				</div>

				<div class="form-group mt-md city-id">
					<label class="col-md-3 control-label"><?= translate('city') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="city_id" id="city_id">
							<?php
							foreach ($cities as $city) { ?>
								<option value="<?= $city['id'] ?>"><?= $city['city_name'] ?></option>
							<?php } ?>
						</select>
						<span class="error"><?= form_error('cities') ?></span>
					</div>
				</div>

				<div class="form-group mt-md region">
					<label class="col-md-3 control-label"><?= translate('region') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="region_id" id="region_id"></select>
						<span class="error"><?= form_error('regions') ?></span>
					</div>
				</div>

				<div class="form-group mt-md metro">
					<label class="col-md-3 control-label"><?= translate('metro') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="metro_id" id="metro_id">
							<?php foreach($metros as $metro){ ?>
								<option value="<?= $metro['id'] ?>"><?= $metro['metro_name']; ?></option>
							<?php }?>
						</select>
						<span class="error"><?= form_error('metros') ?></span>
					</div>
				</div>

				<div class="form-group mt-md district">
					<label class="col-md-3 control-label"><?= translate('district') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="district_id" id="district_id"></select>
						<span class="error"><?= form_error('districts') ?></span>
					</div>
				</div>

				<div class="form-group mt-md address">
					<label class="col-md-3 control-label"><?= translate('address') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="address" placeholder="address" value="<?= set_value('address') ?>" />
						<span class="error"><?= form_error('address') ?></span>
						<input type="hidden" name="latitude" id="latitude" value="">
						<input type="hidden" name="longitude" id="longitude" value="">



					</div>
				</div>
				<div class="form-group mt-md">
					<label class="col-md-3 control-label"><?= translate('address') ?> <span class="required">*</span></label>
					<div id="modalMap" class="col-md-8">
						<div>
							<div>
								<div>
									<input id="pac-input" class="controls pac-target-input" type="text" placeholder="Ünvan" />
									<div class="map-complex" id="gmap"></div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="form-group mt-md description">
					<label class="col-md-3 control-label"><?= translate('description') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<textarea name="description" class="form-control summernote" id="summernote">
								</textarea>
						<span class="error"><?= form_error('description') ?></span>
					</div>
				</div>

				<div class="form-group mt-md description">
					<label class="col-md-3 control-label"><?= translate('image') ?> <span class="required">*</span></label>
					<input type="file" multiple name="photos" id="">
				</div>




				<div class="form-group mt-md status">
					<label class="col-md-3 control-label" for="status"><?= translate('status') ?> <span class="required">*</span></label>
					<div class="col-md-6">
						<select class="form-control" name="status" id="status">
							<option disabled selected><?= translate('please_select_one_item') ?></option>
							<option value="0"><?= translate('deactive') ?></option>
							<option value="1"><?= translate('active') ?></option>
						</select>
						<span class="error"><?= form_error('status') ?></span>
					</div>
				</div>


				<footer class="panel-footer mt-lg">
					<div class="row">
						<div class="col-md-2 col-md-offset-3">
							<button type="submit" class="btn btn-default btn-block" name="submit" value="save">
								<i class="fas fa-plus-circle"></i> <?= translate('save') ?>
							</button>
						</div>
					</div>
				</footer>

				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>
<script src="<?= base_url('assets/site/admin/jquery-3.3.1.min.js') ?>"></script>
<script src='<?= base_url('assets/site/admin/sweetalert2.all.min.js') ?>'></script>
<script src='<?= base_url('assets/site/admin/underscore-min.js') ?>'></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcVxlZlT3nO44ljCnR2f89GqzxkuCQftY&libraries=places&callback=initMap&language=az">

</script>
