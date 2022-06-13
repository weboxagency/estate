<section class="panel">
   <div class="tabs-custom">
      <ul class="nav nav-tabs">
         <li class="<?=(empty($validation_error) ? 'active' : '') ?>">
            <a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?=translate('add_ads')?></a>
         </li>
         <li class="<?=(!empty($validation_error) ? 'active' : '') ?>">
            <a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?=translate('add_ads')?></a>
         </li>
      </ul>
      <div class="tab-content">
         <div id="list" class="tab-pane <?=(empty($validation_error) ? 'active' : '')?>">
            <div class="mb-md">
               <table class="table table-responsive table-bordered table-hover table-condensed mb-none table-export">
                  <thead>
                     <tr>	
                        <th width="50"><?=translate('id')?></th>
                        <th><?=translate('ads_pin_kod')?></th>
                        <th><?= translate('ads_number') ?></th>
                        <th><?= translate('type') ?></th>
                        <th><?= translate('connection_type') ?></th>
                        <th><?= translate('property_type') ?></th>
                        <th><?= translate('price') ?></th>
                        <th><?= translate('average_price') ?></th>
                        <th><?= translate('room') ?></th>
                        <th><?= translate('area') ?></th>
                        <th><?= translate('land_area') ?></th>
                        <th><?= translate('floor') ?></th>
                        <th><?= translate('max_floor') ?></th>
                        <th><?= translate('repair') ?></th>
                        <th><?= translate('deed') ?></th>
                        <th><?= translate('mortgage') ?></th>
                        <th><?= translate('description') ?></th>
                        <th><?= translate('user_type') ?></th>
                        <th><?= translate('name') ?></th>
                        <th><?= translate('email') ?></th>
                        <th><?= translate('mobile') ?></th>
                        <th><?= translate('has_whatsapp') ?></th>
                        <th><?= translate('city_id') ?></th>
                        <th><?= translate('region_id') ?></th>
                        <th><?= translate('district_id') ?></th>
                        <th><?= translate('metro_id') ?></th>
                        <th><?= translate('business_center') ?></th>
                        <th><?= translate('complex') ?></th>
                        <th><?= translate('is_active') ?></th>
                        <th><?= translate('pull_ads_forward_begin') ?></th>
                        <th><?= translate('pull_ads_forward_end') ?></th>
                        <th><?= translate('vip_begin') ?></th>
                        <th><?= translate('vip_end') ?></th>
                        <th><?= translate('premium_begin') ?></th>
                        <th><?= translate('premium_end') ?></th>
                        <th><?= translate('created_at') ?></th>
                        <th><?= translate('updated_at') ?></th>
                        <th><?= translate('deleted_at') ?></th>
                        <th><?= translate('approved_at') ?></th>
                        <th><?= translate('simple_ads_end_date') ?></th>
                        <th><?=translate('is_active')?></th>
                        <th><?=translate('status')?></th>
                        <th class="no-sort"><?=translate('action')?></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $count = 1;
                        foreach($ads as $row):
                     ?>
                     <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $row['ads_pin_kod'];?></td>
                        <td><?php echo $row['ads_number'];?></td>
                        <td>
                        	<?php
	                        	if ($row['type']==1) {
	                        		echo "Elan";
	                        	} elseif ($row['type']==2) {
	                        		echo "Yaşayış kompleksi";
	                        	} else {
	                        		echo "Biznes mərkəzi";
	                        	}
                    		?>
                    	</td>
                        <td><?= $row['connection_type'];?></td>
                        <td><?= $row['property_type'];?></td>
                        <td><?= $row['price'];?> AZN</td>
                        <td><?= $row['price']/$row['area'];?> AZN</td>
                        <td><?= $row['room'];?></td>
                        <td><?= $row['area'];?> m<sup>2</sup></td>
                        <td><?= $row['land_area'];?> sot</td>
                        <td><?= $row['floor'];?></td>
                        <td><?= $row['max_floor'];?></td>
                        <td><?= $row['repair']==1 ? 'Təmirli' : 'Təmirsiz';?></td>
                        <td><?= $row['deed'];?></td>
                        <td><?= $row['mortgage'];?></td>
                        <td><?= $row['description'];?></td>
                        <td><?= $row['user_type']==1 ? 'Mülkiyyətçi' : 'Vasitəçi';?></td>
                        <td><?= $row['name'];?></td>
                        <td><?= $row['email'];?></td>
                        <td><?= $row['mobile'];?></td>
                        <td><?= $row['has_whatsapp']==1 ? 'Whatsapp aktivdir' : 'Whatsapp aktiv deyil';?></td>
                        <td><?= $row['city_id'];?></td>
                        <td><?= $row['region_id'];?></td>
                        <td><?= $row['district_id'];?></td>
                        <td><?= $row['metro_id'];?></td>
                        <td><?= $row['business_center']==1 ? 'Biznes mərkəzi' : '' ;?></td>
                        <td><?= $row['complex']==1 ? 'Yaşayış kompleksi' : '' ;?></td>
                        <td><?= $row['is_active'];?></td>
                        <td><?= $row['pull_ads_forward_begin'];?></td>
                        <td><?= $row['pull_ads_forward_end'];?></td>
                        <td><?= $row['vip_begin'];?></td>
                        <td><?= $row['vip_end'];?></td>
                        <td><?= $row['premium_begin'];?></td>
                        <td><?= $row['premium_end'];?></td>
                        <td><?= $row['created_at'];?></td>
                        <td><?= $row['updated_at'];?></td>
                        <td><?= $row['deleted_at'];?></td>
                        <td><?= $row['approved_at'];?></td>
                        <td><?= $row['simple_ads_end_date'];?></td>
                        <td>
							<div class="material-switch ml-xs">
								<input class="ads-switch" id="switch_<?=$row['id']?>" data-id="<?=$row['id']?>" name="ads_switch<?=$row['id']?>" 
								type="checkbox" <?php echo ($row['is_active'] == 1 ? 'checked' : ''); ?> />
								<label for="switch_<?=$row['id'] ?>" class="label-primary"></label>
							</div>
						</td>
                        <td>
                           <select name="status" class="ads-status" data-id="<?= $row['id'] ?>">
	                           	<option value="1" <?= $row['status']==1 ? 'selected' : '' ?>>Dərc edilmiş</option>
	                           	<option value="2" <?= $row['status']==2 ? 'selected' : '' ?>>Yoxlanışda olan</option>
	                           	<option value="3" <?= $row['status']==3 ? 'selected' : '' ?>>Qəbul edilməmiş</option>
	                           	<option value="4" <?= $row['status']==4 ? 'selected' : '' ?>>Vaxtı bitmiş</option>
	                           	<option value="5" <?= $row['status']==5 ? 'selected' : '' ?>>Silinmiş</option>
                           </select>
                        </td>
                        <td class="min-w-c">
                        	<button type="button" class="btn btn-info btn-circle icon" data-toggle="modal" 
                        	data-target="#exampleModal">
                              <i class="fas fa-eye"></i>
                           </button>

                           <!-- Show modal -->
                           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        ...
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="button" class="btn btn-primary">Save changes</button>
							      </div>
							    </div>
							  </div>
							</div>

                           <!--update link-->
                           <a href="<?=base_url('users/user_edit/'.$row['id'])?>" class="btn btn-default btn-circle icon">
                              <i class="fas fa-pen-nib"></i>
                           </a>
                           <!-- delete link -->
                           <?php echo btn_delete('ads/ads_delete/' . $row['id']);?>
                        </td>
                     </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="tab-pane <?=(!empty($validation_error) ? 'active' : '')?>" id="create">
            <?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered validate')); ?>
            	
            		<div class="form-group mt-md related-person">
						<label class="col-md-3 control-label"><?=translate('related_person')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="name" value="<?=set_value('name')?>" />
							<span class="error"><?=form_error('name') ?></span>
						</div>
					</div>

					<div class="form-group mt-md user-type">
						<label class="col-md-3 control-label"><?=translate('user_type')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="user_type" id="user_type">
								<option value="1"><?= translate('owner') ?></option>
								<option value="2"><?= translate('mediator') ?></option>
							</select>
							<span class="error"><?=form_error('user_type') ?></span>
						</div>
					</div>


					<div class="form-group mt-md mobile">
						<label class="col-md-3 control-label"><?=translate('mobile')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="mobile" value="<?=set_value('mobile')?>" />
							<span class="error"><?=form_error('mobile') ?></span>
							<label id="has_whatsapp">
								<input type="checkbox" id="has_whatsapp" name="has_whatsapp">
								Whatsapp aktivdir 
							</label>
						</div>
					</div>


					<div class="form-group mt-md email">
						<label class="col-md-3 control-label"><?=translate('email')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="email" value="<?=set_value('email')?>" />
							<span class="error"><?=form_error('email') ?></span>
						</div>
					</div>

					<div class="form-group mt-md ads-type">
						<label class="col-md-3 control-label"><?=translate('ads_type')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="ads_type" id="ads_type">
								<?php 
									foreach($ads_type as $type) {?>
										<option value="<?= $type['id'] ?>"><?= $type['type_name'] ?></option>
									<?php } ?>
							</select>
							<span class="error"><?=form_error('ads_type') ?></span>
						</div>
					</div>

					<div class="form-group mt-md estate-type">
						<label class="col-md-3 control-label"><?=translate('estate_type')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="estate_type" id="estate_type">
								<?php 
									foreach($estate_type as $etype) {?>
										<option value="<?= $etype['id'] ?>"><?= $etype['estate_type_name'] ?></option>
									<?php } ?>
							</select>
							<span class="error"><?=form_error('estate_type') ?></span>
							<div class="deed">
								<label>
									<input type="checkbox" id="deed" name="deed">
									Çıxarış var 
								</label>
							</div>
								
						</div>
					</div>

					<div class="form-group mt-md price">
						<label class="col-md-3 control-label"><?=translate('price')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="price" placeholder="AZN" value="<?=set_value('price')?>" />
							<span class="error"><?=form_error('price') ?></span>
							<div class="mortgage">
								<label>
									<input type="checkbox" id="mortgage" name="mortgage">
									Ipoteka var 
								</label>
							</div>
						</div>
					</div>

					<div class="form-group mt-md room">
						<label class="col-md-3 control-label"><?=translate('room')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="room" placeholder="<?= translate('room') ?>" value="<?=set_value('room')?>" />
							<span class="error"><?=form_error('room') ?></span>
						</div>
					</div>

					<div class="form-group mt-md floor">
						<label class="col-md-3 control-label"><?=translate('floor')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="floor" placeholder="<?= translate('enter_floor') ?>" value="<?=set_value('floor')?>" />
							<span class="error"><?=form_error('floor') ?></span>
						</div>
					</div>

					<div class="form-group mt-md max-floor">
						<label class="col-md-3 control-label"><?=translate('max_floor')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="max_floor" placeholder="<?= translate('enter_max_floor') ?>" value="<?=set_value('max_floor')?>" />
							<span class="error"><?=form_error('max_floor') ?></span>
						</div>
					</div>

					<div class="form-group mt-md area">
						<label class="col-md-3 control-label"><?=translate('area')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="area" placeholder="area" value="<?=set_value('area')?>" />
							<span class="error"><?=form_error('area') ?></span>
							
						</div>
					</div>

					<div class="form-group form-inline mt-md repair">
						<label class="col-md-3 control-label"><?=translate('repair')?> <span class="required">*</span></label>
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
						<label class="col-md-3 control-label"><?=translate('land_area')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="land_area" placeholder="land_area" value="<?=set_value('land_area')?>" />
							<span class="error"><?=form_error('land_area') ?></span>
						</div>
					</div>

					<div class="form-group mt-md city-id">
						<label class="col-md-3 control-label"><?=translate('city')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="city_id" id="city_id">
								<?php 
									foreach($cities as $city) {?>
										<option value="<?= $city['id'] ?>"><?= $city['city_name'] ?></option>
									<?php } ?>
							</select>
							<span class="error"><?=form_error('cities') ?></span>
						</div>
					</div>

					<div class="form-group mt-md region">
						<label class="col-md-3 control-label"><?=translate('region')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="region_id" id="region_id">
								<?php 
									foreach($regions as $region) {?>
										<option value="<?= $region['id'] ?>"><?= $region['region_name'] ?></option>
									<?php } ?>
							</select>
							<span class="error"><?=form_error('regions') ?></span>
						</div>
					</div>

					<div class="form-group mt-md district">
						<label class="col-md-3 control-label"><?=translate('district')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<select class="form-control" name="district_id" id="district_id">
								<?php 
									foreach($districts as $dis) {?>
										<option value="<?= $dis['id'] ?>"><?= $dis['district_name'] ?></option>
									<?php } ?>
							</select>
							<span class="error"><?=form_error('districts') ?></span>
						</div>
					</div>

					<div class="form-group mt-md address">
						<label class="col-md-3 control-label"><?=translate('address')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="address" placeholder="address" value="<?=set_value('address')?>" />
							<span class="error"><?=form_error('address') ?></span>
						</div>
					</div>

					<div class="form-row">
                           <div class="form-item form-item--flex form-item--large">
                              <label for="address">
                              <?= translate('address') ?>
                              <i class="fas fa-star-of-life"></i>
                              </label>
                              <div class="form-item__labeled">
                                 <input type="text" class="form-item__element" name="address" placeholder="Ünvan" id="location" value="">
                                 <input type="hidden" name="latitude" id="latitude" value="">
                                 <input type="hidden" name="longitude" id="longitude" value="">
                                 <p class="form-message form-message--info align-items-center">
                                    <svg class="icon icon-pin">
                                       <use xlink:href="<?= base_url() ?>assets/site/img/icons/icons.svg#icon-pin"></use>
                                    </svg>
                                    <span>
                                       <a href="#" class="googleMapImg" data-toggle="modal" data-target="#modalMap"><?= translate('show_map') ?></a>
                                    </span>
                                 </p>
                                 <div class="modal fade" id="modalMap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header" style="border-bottom: unset;">
                                             <div class="modal-close" data-dismiss="modal">
                                                <svg class="icon icon-close">
                                                   <use xlink:href="assets/site/img/icons/icons9860.svg?v=2022-04-19%2000:11:16#icon-close"></use>
                                                </svg>
                                             </div>
                                          </div>
                                          <div class="modal-body">
                                             <input id="pac-input" class="controls" type="text" placeholder="Ünvan" />
                                             <div class="map-complex" id="gmap"></div>
                                             <a id="savelocation" href="#" class="link-button link-button--primary link-setup d-none d-sm-flex" data-dismiss="modal"><?= translate('save') ?></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="form-item form-item--flex form-item--large form-item--textarea">
                              <label for="property_description">
                              </label>
                              <div class="form-item__labeled">
                                 <img id="map-id" src="">
                              </div>
                           </div>
                        </div>
					<div class="form-group mt-md description">
						<label class="col-md-3 control-label"><?=translate('description')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<textarea name="description" class="form-control summernote" id="summernote">
							</textarea>
							<span class="error"><?=form_error('description') ?></span>
						</div>
					</div>

					<div class="form-group mt-md images">
						<label class="col-md-3 control-label" for="images"><?=translate('images')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="file" name="file" id="image-input">
							<div id="display-image"></div>
						</div>
					</div>



					<div class="form-group mt-md status">
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
<script src="<?= base_url('assets/site/admin/jquery-3.3.1.min.js') ?>"></script>
<script src='<?= base_url('assets/site/admin/sweetalert2.all.min.js') ?>'></script>
<script src='<?= base_url('assets/site/admin/underscore-min.js') ?>'></script>
