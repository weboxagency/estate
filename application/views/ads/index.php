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
                        <td><?php echo $row['connection_type'];?></td>
                        <td><?php echo $row['property_type'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['average_price'];?></td>
                        <td><?php echo $row['room'];?></td>
                        <td><?php echo $row['area'];?></td>
                        <td><?php echo $row['land_area'];?></td>
                        <td><?php echo $row['floor'];?></td>
                        <td><?php echo $row['max_floor'];?></td>
                        <td><?php echo $row['repair'];?></td>
                        <td><?php echo $row['deed'];?></td>
                        <td><?php echo $row['mortgage'];?></td>
                        <td><?php echo $row['user_type'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['has_whatsapp'];?></td>
                        <td><?php echo $row['city_id'];?></td>
                        <td><?php echo $row['region_id'];?></td>
                        <td><?php echo $row['district_id'];?></td>
                        <td><?php echo $row['metro_id'];?></td>
                        <td><?php echo $row['business_center'];?></td>
                        <td><?php echo $row['complex'];?></td>
                        <td><?php echo $row['is_active'];?></td>
                        <td><?php echo $row['pull_ads_forward_begin'];?></td>
                        <td><?php echo $row['pull_ads_forward_end'];?></td>
                        <td><?php echo $row['vip_begin'];?></td>
                        <td><?php echo $row['vip_end'];?></td>
                        <td><?php echo $row['premium_begin'];?></td>
                        <td><?php echo $row['premium_end'];?></td>
                        <td><?php echo $row['created_at'];?></td>
                        <td><?php echo $row['updated_at'];?></td>
                        <td><?php echo $row['deleted_at'];?></td>
                        <td><?php echo $row['approved_at'];?></td>
                        <td><?php echo $row['simple_ads_end_date'];?></td>
                        <td>
                           <div class="material-switch ml-xs">
                              <input class="users-switch" id="switch_<?=$row['id']?>" data-id="<?=$row['id']?>" name="users_switch<?=$row['id']?>" 
                              type="checkbox" <?php echo ($row['status'] == 1 ? 'checked' : ''); ?> />
                              <label for="switch_<?=$row['id'] ?>" class="label-primary"></label>
                           </div>
                        </td>
                        <td class="min-w-c">
                           <!--update link-->
                           <a href="<?=base_url('users/user_edit/'.$row['id'])?>" class="btn btn-default btn-circle icon">
                              <i class="fas fa-pen-nib"></i>
                           </a>
                           <!-- delete link -->
                           <?php echo btn_delete('users/user_delete/' . $row['id']);?>
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
                  <label class="col-md-3 control-label"><?=translate('name')?> <span class="required">*</span></label>
                  <div class="col-md-6">
                     <input type="text" class="form-control" name="name" placeholder="<?= translate('enter_name_surname') ?>" value="<?=set_value('name')?>" />
                     <span class="error"><?=form_error('name') ?></span>
                  </div>
               </div>

               <div class="form-group mt-md">
                  <label class="col-md-3 control-label"><?=translate('email')?> <span class="required">*</span></label>
                  <div class="col-md-6">
                     <input type="email" class="form-control" placeholder="<?= translate('enter_email') ?>" name="email" value="<?=set_value('email')?>" />
                     <span class="error"><?=form_error('email') ?></span>
                  </div>
               </div>

               <div class="form-group mt-md">
                  <label class="col-md-3 control-label"><?=translate('phone')?> <span class="required">*</span></label>
                  <div class="col-md-6">
                     <input type="text" class="form-control" placeholder="<?= translate('enter_phone_number') ?>" name="mobile" value="<?=set_value('phone')?>" />
                     <span class="error"><?=form_error('phone') ?></span>
                  </div>
               </div>

               <div class="form-group mt-md">
                  <label class="col-md-3 control-label"><?=translate('balance')?> <span class="required">*</span></label>
                  <div class="col-md-6">
                     <input type="number" class="form-control" placeholder="<?= translate('AZN') ?>" name="balance" value="<?=set_value('balance')?>" />
                     <span class="error"><?=form_error('balance') ?></span>
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